<?php

class SubTopicController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','DynamicSubjects','DynamicSubSection','create','update','UpdateSubSection','UpdateSubjects'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array(),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new SubTopic;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SubTopic']))
		{
			$model->attributes=$_POST['SubTopic'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SubTopic']))
		{
			$model->attributes=$_POST['SubTopic'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('SubTopic');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new SubTopic('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SubTopic']))
			$model->attributes=$_GET['SubTopic'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return SubTopic the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=SubTopic::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	public function actionDynamicSubjects() {
            $class_id = $_POST['SubTopic']['class_id'];
            $data=Subjects::model()->findAll('class_id=:class_id',
                    array(':class_id'=> $class_id));

            $data=CHtml::listData($data,'id','name');
            foreach($data as $value=>$name)  {
                echo CHtml::tag('option',
                   array('value'=>$value),CHtml::encode($name),true);
            }
        }
		
	public function actionDynamicSubSection() {
            $sub_id = $_POST['SubTopic']['sub_id'];
            $data=SubSection::model()->findAll('sub_id=:sub_id',
                    array(':sub_id'=> $sub_id));

            $data=CHtml::listData($data,'id','section_name');
            foreach($data as $value=>$section_name)  {
                echo CHtml::tag('option',
                   array('value'=>$value),CHtml::encode($section_name),true);
            }
        }
		
		public function actionUpdateSubjects()
    {
            //Cities
            $data = Subjects::model()->findAll('class_id=:class_id', array(':class_id'=>(int) $_POST['class_id']));
            $data = CHtml::listData($data,'sub_id','name');
            $dropDownSubjects = "<option value=''>Select Subject</option>"; 
            foreach($data as $value=>$name)
                $dropDownSubjects .= CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
 
            //District
            $dropDownSubSection = "<option value='null'>Select Section</option>";
 
            // return data (JSON formatted)
            echo CJSON::encode(array(
              'dropDownSubjects'=>$dropDownSubjects,
              'dropDownSubSection'=>$dropDownSubSection
            ));
    }
	
	public function actionUpdateSubSection()
    {
            $data = SubSection::model()->findAll('sub_id=:sub_id', array(':sub_id'=>(int) $_POST['sub_id']));
            $data = CHtml::listData($data,'sub_section_id','section_name');
            echo "<option value=''>Select Section</option>";
            foreach($data as $value=>$section_name)
                echo CHtml::tag('option', array('value'=>$value),CHtml::encode($section_name),true);
    }

	/**
	 * Performs the AJAX validation.
	 * @param SubTopic $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sub-topic-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
