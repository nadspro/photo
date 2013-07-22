<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>


<?php 
$items = array('mobile'=>'Mobile','printers'=>'Printers');
    echo CHtml::dropDownList('id_type','', $items, array('prompt'=>'-'));
    echo CHtml::dropDownList('id_company', '', array());
    echo CHtml::dropDownList('id_article', '', array());
 
    //handle all data response in one controller action
    ECascadeDropDown::master('id_type','site/selectarticle') //'controllerId/actionId'
                      ->setDependent('id_company') //master for id_article with default options
                      ->setDependent('id_article', //with custom labels
                                      array('dependentStartingLabel'=>'Select article','dependentLoadingLabel'=>'Loading articles...'));
?>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>



 <?php array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")); ?>
