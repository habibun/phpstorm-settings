<?php

namespace ${NAMESPACE};

use Doctrine\ORM\EntityManagerInterface;
use Respect\Validation\Validator;

use App\Validation\AbstractValidator;
use App\Validation\EntityValidatorTrait as EntityValidator;
use App\Validation\UniqueValidatorTrait as UniqueValidator;

/**
 * Class ${NAME}.
 */
class ${NAME} extends AbstractValidator
{
    use EntityValidator,
        UniqueValidator;

    /**
     * @var string
     */
    protected ${DS}action;

    /**
     * @var object
     */
    protected ${DS}object;

    /**
     * Create Validator instance.
     *
     * @param EntityManagerInterface ${DS}em
     */
    public function __construct(EntityManagerInterface ${DS}em)
    {
        ${DS}this->em = ${DS}em;
    }

    /**
     * Sets the validator action.
     *
     * @param string ${DS}action
     */
    public function setAction(${DS}action)
    {
        ${DS}this->action = ${DS}action;
    }

    /**
     * Set the object.
     *
     * @param object ${DS}object
     */
    public function setObject(${DS}object)
    {
        ${DS}this->object = ${DS}object;
    }

    /**
     * {@inheritdoc}
     */
    public function getValidationRules()
    {
        switch (${DS}this->action) {
            case 'new_$case_suffix':
                break;
            case 'update_$case_suffix':
                break;
            default:
        }

        return ${DS}this->rules;
    }
}
