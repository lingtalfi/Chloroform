<?php


namespace Ling\Chloroform\Field;


use Ling\Bat\StringTool;
use Ling\Chloroform\DataTransformer\DataTransformerInterface;
use Ling\Chloroform\Validator\ValidatorInterface;


/**
 * The DecorativeField class.
 *
 * The idea of this class is to encode for any type of decorative element of the form.
 * Rather than creating one class per type of decorative element, this class can represent
 * any type of decorative element.
 *
 * This is done via the type property of this class.
 * Use the setType and getType methods to set/get the type.
 *
 *
 * We recommend the following types, however you are free to create your owns:
 *
 * - hr: a separator
 *
 *
 *
 */
class DecorativeField implements FieldInterface
{

    /**
     * This property holds the cpt for this instance.
     * @var int
     */
    private static $cpt = 1;


    /**
     * This property holds the type for this instance.
     * @var string
     */
    protected $type;


    /**
     * Builds the DecorativeField instance.
     */
    public function __construct()
    {
        $this->type = "not_defined";
    }


    /**
     * @implementation
     */
    public function getId()
    {
        $cpt = self::$cpt++;
        return StringTool::getUniqueCssId("decorative-field-$cpt-");
    }

    /**
     * @implementation
     */
    public function addValidator(ValidatorInterface $validator)
    {
        // nothing to do
    }

    /**
     * @implementation
     */
    public function setDataTransformer(DataTransformerInterface $dataTransformer): FieldInterface
    {
        // nothing to do
        return $this;
    }

    /**
     * @implementation
     */
    public function validates($value): bool
    {
        return true;
    }

    /**
     * @implementation
     */
    public function getErrors(): array
    {
        return [];
    }

    /**
     * @implementation
     */
    public function setValue($value)
    {
        // nothing to do
    }

    /**
     * @implementation
     */
    public function getValue()
    {
        return null;
    }

    /**
     * @implementation
     */
    public function getFallbackValue()
    {
        return null;
    }

    /**
     * @implementation
     */
    public function toArray(): array
    {
        return [];
    }

    /**
     * @implementation
     */
    public function hasVeryImportantData(): bool
    {
        return false;
    }

    /**
     * @implementation
     */
    public function getDataTransformer(): ?DataTransformerInterface
    {
        return null;
    }

    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Returns the type of this instance.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets the type.
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }


}