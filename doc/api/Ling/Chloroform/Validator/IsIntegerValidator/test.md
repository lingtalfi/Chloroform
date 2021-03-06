[Back to the Ling/Chloroform api](https://github.com/lingtalfi/Chloroform/blob/master/doc/api/Ling/Chloroform.md)<br>
[Back to the Ling\Chloroform\Validator\IsIntegerValidator class](https://github.com/lingtalfi/Chloroform/blob/master/doc/api/Ling/Chloroform/Validator/IsIntegerValidator.md)


IsIntegerValidator::test
================



IsIntegerValidator::test — of the validator.




Description
================


public [IsIntegerValidator::test](https://github.com/lingtalfi/Chloroform/blob/master/doc/api/Ling/Chloroform/Validator/IsIntegerValidator/test.md)($value, string $fieldName, [Ling\Chloroform\Field\FieldInterface](https://github.com/lingtalfi/Chloroform/blob/master/doc/api/Ling/Chloroform/Field/FieldInterface.md) $field, ?string &$error = null) : bool




Tests and returns whether the given value matches the criterion
of the validator.

The field name is the human name of the field, it will appear in
the resulting error message most of the time.


If the test fails (the method returns false), then
the error message is accessible via the $error variable.
It's a string.



Note: having both the fieldName (which is the error name) and the field is redundant on purpose.
That's because most of the validators will only need the fieldName.
In some rare cases though, the validator would benefit having access to the original field instance.
This is the case for CSRFValidator, which would drain the csrf token from the CSRFField.




Parameters
================


- value

    

- fieldName

    

- field

    

- error

    


Return values
================

Returns bool.








Source Code
===========
See the source code for method [IsIntegerValidator::test](https://github.com/lingtalfi/Chloroform/blob/master/Validator/IsIntegerValidator.php#L70-L127)


See Also
================

The [IsIntegerValidator](https://github.com/lingtalfi/Chloroform/blob/master/doc/api/Ling/Chloroform/Validator/IsIntegerValidator.md) class.

Previous method: [setMode](https://github.com/lingtalfi/Chloroform/blob/master/doc/api/Ling/Chloroform/Validator/IsIntegerValidator/setMode.md)<br>Next method: [toArray](https://github.com/lingtalfi/Chloroform/blob/master/doc/api/Ling/Chloroform/Validator/IsIntegerValidator/toArray.md)<br>

