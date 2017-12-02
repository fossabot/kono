<?php
/* @var $this OfficerController */
/* @var $model Officer */
/* @var $form CActiveForm */
if(isset($model->id_officer))
    $id_state=$model->district->id_state;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'officer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fkey_place'); ?>
		<?php		
		$districts = CHtml::listData(District::model()->bystate($id_state)->findAll(), 'id_district', 'name');
		echo $form->dropDownList($model, 'fkey_place', $districts) ?>
		<?php echo $form->error($model,'fkey_place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desig'); ?>
		<?php echo $form->dropDownList($model, 'desig', [
		     'DISTCOLLECTOR' => 'Deputy Commissioner of a District (aka Collector)',   
		]) ?>
		<?php echo $form->error($model,'desig'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->