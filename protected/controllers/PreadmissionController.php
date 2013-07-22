<?php

class PreadmissionController extends Controller
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
				'actions'=>array('index','view','printpdf','pdf','attachpdf','createemailpdf','create','DisplaySavedImage','Remove','DynamicBatch'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
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
		$model=new Preadmission;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Preadmission']))
		{
			$model->attributes=$_POST['Preadmission'];
			$list = $_POST['Preadmission'];
			if($file=CUploadedFile::getInstance($model,'photo_data'))
       		 {
            $model->photo_file_name=$file->name;
            $model->photo_content_type=$file->type;
            $model->photo_file_size=$file->size;
            $model->photo_data=file_get_contents($file->tempName);
      		  }
			
			if($model->save())
			{
					$this->redirect(array('Preadmission/createemailpdf','id'=>$model->id,'email'=>$model->S_email));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionDynamicBatch() {
            $class_id = $_POST['Preadmission']['class_id'];
            $data=Batch::model()->findAll('class_id=:class_id',
                    array(':class_id'=> $class_id));

            $data=CHtml::listData($data,'id','batch_name');
            foreach($data as $value=>$batch_name)  {
                echo CHtml::tag('option',
                   array('value'=>$value),CHtml::encode($batch_name),true);
            }
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

		if(isset($_POST['Preadmission']))
		{
			$model->attributes=$_POST['Preadmission'];
			if($file=CUploadedFile::getInstance($model,'photo_data'))
       		 {
            $model->photo_file_name=$file->name;
            $model->photo_content_type=$file->type;
            $model->photo_file_size=$file->size;
            $model->photo_data=file_get_contents($file->tempName);
      		  }
			if($model->save())
		
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionDisplaySavedImage()
		{
			$model=$this->loadModel($_GET['id']);
		 
			header('Pragma: public');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Content-Transfer-Encoding: binary');
			header('Content-length: '.$model->photo_file_size);
			header('Content-Type: '.$model->photo_content_type);
			header('Content-Disposition: attachment; filename='.$model->photo_file_name);
		 
				//echo '<img src="'.base64_decode($model->photo_data).'" />';
				echo $model->photo_data;
		}
	public function actionRemove()
	{
		$model = Preadmission::model()->findByAttributes(array('id'=>$_REQUEST['id']));
		$model->saveAttributes(array('photo_file_name'=>'','photo_data'=>''));
		$this->redirect(array('update','id'=>$_REQUEST['id']));
	}

	public function actionPrintpdf()
	{
		//$this->layout='';
		//header("Content-type: image/jpeg");
		//echo $model->photo_data;
		$this->render('printpdf',array(
			'model'=>$this->loadModel($_REQUEST['id']),
		));
	}
	public function actionPdf()
    {
        
        # HTML2PDF has very similar syntax
        $html2pdf = Yii::app()->ePdf->HTML2PDF();

        $html2pdf->WriteHTML($this->renderPartial('printpdf', array('model'=>$this->loadModel($_REQUEST['id'])), true));
        $html2pdf->Output();
 
        ////////////////////////////////////////////////////////////////////////////////////
	}
	
	public function actionCreateEmailPdf()
	{
		$html2pdf = Yii::app()->ePdf->HTML2PDF();

        $html2pdf->WriteHTML($this->renderPartial('printpdf', array('model'=>$this->loadModel($_REQUEST['id'])), true));
        
      	$content_PDF = $html2pdf->Output('', EYiiPdf::OUTPUT_TO_STRING);
	   	$a = $_GET['id'];
		$email = $_GET['email'];
		$message = 'Hello World! by dj. this must be 2nd email';
		$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
		$mailer->Host = 'smtp.gmail.com';
		$mailer->Port = 465;
		$mailer->IsSMTP();
		$mailer->IsHTML(true);
		$mailer->SMTPAuth = true;
		$mailer->SMTPSecure = 'ssl';
		$mailer->From = 'nadspro@gmail.com';
		$mailer->Username = "nadspro@gmail.com";
		$mailer->Password = "vidusys@12345";
		$mailer->AddReplyTo('nadspro@gmail.com');
		$mailer->AddAddress($email);
		$mailer->FromName = 'Nads';
		$mailer->CharSet = 'UTF-8';
		//$mailer->AddAttachment('images/pdf-but.png');
		$mailer->AddStringAttachment($content_PDF, "my_document.pdf");
		//$mailer->Subject = Yii::t('demo', 'Yii rulez!');
		$mailer->Subject = "Someone sent you an email. TEST mail by rupesh";
		$mailer->Body = $message;
		//$mailer->Send();
		if(!$mailer->Send()) {
				  echo "Fail to send your message!";
			 }
			 else {
				  echo "Message sent successfully!";
			 }
 
			
	}
	
	public function actionAttachpdf()
	{
	    $html2pdf = Yii::app()->ePdf->HTML2PDF();

        $html2pdf->WriteHTML($this->renderPartial('printpdf', array('model'=>$this->loadModel($_REQUEST['id'])), true));
        
       $content_PDF = $html2pdf->Output('', EYiiPdf::OUTPUT_TO_STRING);
	   //$a = $_GET['id'];
	   //$mo=new Preadmission;
       
	   //$q = Yii::app()->db->createCommand()->select('S_email')->from('preadmission')->where('id=$_GET['id'])->queryRow();
	  
	  
	  
	 /* $criteria=new CDbCriteria;
$criteria->select='S_email';  // only select the 'title' column
$criteria->condition='id='.$_GET['id'];
$post=Preadmission::model()->find($criteria);*/


//echo $q;
	   //$q = Yii::app()->db->createCommand("select S_email from preadmission where id=$a")->queryRow();
	  
	    $message = 'Hello World! by dj. this must be 2nd email';
		$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
		$mailer->Host = 'smtp.gmail.com';
		$mailer->Port = 465;
		$mailer->IsSMTP();
		$mailer->IsHTML(true);
		$mailer->SMTPAuth = true;
		$mailer->SMTPSecure = 'ssl';
		$mailer->From = 'nadspro@gmail.com';
		$mailer->Username = "nadspro@gmail.com";
		$mailer->Password = "vidusys@12345";
		$mailer->AddReplyTo('nadspro@gmail.com.com');
		$mailer->AddAddress($q);
		$mailer->FromName = 'Nads';
		$mailer->CharSet = 'UTF-8';
		//$mailer->AddAttachment('images/pdf-but.png');
		$mailer->AddStringAttachment($content_PDF, "my_document.pdf");
		//$mailer->Subject = Yii::t('demo', 'Yii rulez!');
		$mailer->Subject = "Someone sent you an email. TEST mail by rupesh";
		$mailer->Body = $message;
		//$mailer->Send();
		if(!$mailer->Send()) {
				  echo "Fail to send your message!";
			 }
			 else {
				  echo "Message sent successfully!";
			 }
 
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
		$dataProvider=new CActiveDataProvider('Preadmission');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Preadmission('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Preadmission']))
			$model->attributes=$_GET['Preadmission'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Preadmission the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Preadmission::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Preadmission $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='preadmission-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
