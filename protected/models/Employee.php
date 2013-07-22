<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id
 * @property string $fname
 * @property string $mname
 * @property string $lname
 * @property string $addr1
 * @property integer $pincode
 * @property string $ph
 * @property string $joiningdate
 * @property string $Gender
 * @property string $qualification
 * @property integer $experienceyears
 * @property string $dob
 * @property string $marital_status
 * @property string $bg
 * @property string $nationality
 * @property string $city
 * @property string $state
 * @property string $emailid
 * @property string $offph
 * @property string $fax
 * @property string $Created_at
 * @property string $Updated_at
 * @property string $User_id
 * @property integer $Is_deleted
 */
class Employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pincode, experienceyears, Is_deleted', 'numerical', 'integerOnly'=>true),
			array('fname, mname, lname, emailid', 'length', 'max'=>255),
			array('ph, offph', 'length', 'max'=>10),
			array('Gender, marital_status, bg', 'length', 'max'=>5),
			array('qualification', 'length', 'max'=>100),
			array('nationality, city, state, fax, User_id', 'length', 'max'=>50),
			array('addr1, joiningdate, dob, Created_at, Updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fname, mname, lname, addr1, pincode, ph, joiningdate, Gender, qualification, experienceyears, dob, marital_status, bg, nationality, city, state, emailid, offph, fax, Created_at, Updated_at, User_id, Is_deleted', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fname' => 'Fname',
			'mname' => 'Mname',
			'lname' => 'Lname',
			'addr1' => 'Addr1',
			'pincode' => 'Pincode',
			'ph' => 'Ph',
			'joiningdate' => 'Joiningdate',
			'Gender' => 'Gender',
			'qualification' => 'Qualification',
			'experienceyears' => 'Experienceyears',
			'dob' => 'Dob',
			'marital_status' => 'Marital Status',
			'bg' => 'Bg',
			'nationality' => 'Nationality',
			'city' => 'City',
			'state' => 'State',
			'emailid' => 'Emailid',
			'offph' => 'Offph',
			'fax' => 'Fax',
			'Created_at' => 'Created At',
			'Updated_at' => 'Updated At',
			'User_id' => 'User',
			'Is_deleted' => 'Is Deleted',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('mname',$this->mname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('addr1',$this->addr1,true);
		$criteria->compare('pincode',$this->pincode);
		$criteria->compare('ph',$this->ph,true);
		$criteria->compare('joiningdate',$this->joiningdate,true);
		$criteria->compare('Gender',$this->Gender,true);
		$criteria->compare('qualification',$this->qualification,true);
		$criteria->compare('experienceyears',$this->experienceyears);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('marital_status',$this->marital_status,true);
		$criteria->compare('bg',$this->bg,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('emailid',$this->emailid,true);
		$criteria->compare('offph',$this->offph,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('Created_at',$this->Created_at,true);
		$criteria->compare('Updated_at',$this->Updated_at,true);
		$criteria->compare('User_id',$this->User_id,true);
		$criteria->compare('Is_deleted',$this->Is_deleted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}