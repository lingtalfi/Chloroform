<?php


namespace Ling\Chloroform\Validator;


use Ling\Chloroform\Field\FieldInterface;

/**
 * The IsIntegerValidator class.
 *
 * If the value is an integer, it validates.
 *
 *
 *
 * If the value is null or a float, the validation will fail.
 *
 *
 *
 *
 */
class IsIntegerValidator extends AbstractValidator
{
    /**
     * @implementation
     */
    public function test($value, string $fieldName, FieldInterface $field, string &$error = null): bool
    {
        if (
            false === is_integer($value)
        ) {
            $error = $this->getErrorMessage("main", [
                "fieldName" => $fieldName,
            ]);
            return false;
        }
        return true;
    }
}