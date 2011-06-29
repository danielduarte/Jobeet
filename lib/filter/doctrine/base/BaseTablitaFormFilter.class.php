<?php

/**
 * Tablita filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTablitaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'a'  => new sfWidgetFormFilterInput(),
      'b'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'a'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'b'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tablita_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tablita';
  }

  public function getFields()
  {
    return array(
      'id' => 'Number',
      'a'  => 'Number',
      'b'  => 'Number',
    );
  }
}
