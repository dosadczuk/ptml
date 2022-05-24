<?php
/** @noinspection PhpUnhandledExceptionInspection */
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use HaydenPierce\ClassFinder\ClassFinder;
use phpDocumentor\Reflection\DocBlockFactory;

$elements = ClassFinder::getClassesInNamespace('PTML\Element');
if (count($elements) === 0) {
    return; // nothing to process
}

$function_template = ltrim('
/**
 * %1$s
 */
function %2$s(%3$s): %5$s
{
    return new %5$s(%4$s);
}
');

$functions_template = ltrim('
<?php
declare(strict_types=1);

namespace PTML\Element;

%s
');

$functions = [];
foreach ($elements as $element) {
    $functions[] = getFunction($element);
}
$functions = sprintf($functions_template, implode("\n", $functions));

saveToSrcElement($functions);

function getFunction(string $element): ?string
{
    global $function_template;

    $class = new ReflectionClass($element);
    $class_ctor = $class->getConstructor();
    if ($class_ctor === null) {
        return null;
    }

    $fn_comm = getComment($class);
    $fn_name = lcfirst($class->getShortName());
    $fn_output = $class->getShortName();

    $fn_args = implode(', ', array_map(
        fn(ReflectionParameter $param) => sprintf('$%s', $param->getName()),
        $class_ctor->getParameters()
    ));

    $fn_params = implode(', ', array_map(
        fn(ReflectionParameter $param) => sprintf('%s $%s', $param->getType(), $param->getName()),
        $class_ctor->getParameters()
    ));

    return sprintf(
        $function_template,
        $fn_comm,
        $fn_name,
        $fn_params,
        $fn_args,
        $fn_output
    );
}

function getComment(ReflectionClass $class): string
{
    $description = DocBlockFactory::createInstance()
        ->create($class)
        ->getSummary();

    return preg_replace("/\n/", "\n * ", $description);
}

function saveToSrcElement(string $contents): void
{
    file_put_contents(__DIR__ . '/../src/Element/functions.php', $contents);
}
