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
     * This property holds the id for this instance.
     * @var string
     */
    protected $id;


    /**
     * Builds the DecorativeField instance.
     *
     * The properties for a decorative field are:
     *
     * - ?type: string, the type of the decorative field (defaults to undefined)
     * - ?id: string, the identifier of the field (its reference name when used by a chloroform instance)
     *
     *
     * @param array $properties
     */
    public function __construct(array $properties = [])
    {
        $cpt = self::$cpt++;
        $this->type = $properties['type'] ?? "undefined";
        $this->id = $properties['id'] ?? StringTool::getUniqueCssId("decorative-field-$cpt-");
    }


    /**
     * @implementation
     */
    public function getId()
    {
        return $this->id;
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
        return [
            "id" => $this->getId(),
            "label" => null,
            "hint" => null,
            "errorName" => "",
            "value" => "",
            "htmlName" => "",
            "errors" => [],
            "className" => get_called_class(),
            "type" => $this->getType(),
        ];
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

}