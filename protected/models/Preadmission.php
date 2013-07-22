<?php

/**
 * This is the model class for table "preadmission".
 *
 * The followings are the available columns in table 'preadmission':
 * @property integer $id
 * @property string $S_fname
 * @property string $S_mname
 * @property string $S_lname
 * @property integer $S_class
 * @property string $S_school
 * @property string $S_school_timings
 * @property string $S_dob
 * @property string $S_bg
 * @property string $S_gender
 * @property string $S_addr
 * @property string $S_city
 * @property string $S_state
 * @property integer $S_pincode
 * @property integer $S_telephone
 * @property integer $S_ph
 * @property string $S_email
 * @property integer $sc_id
 * @property string $p_mom
 * @property string $P_offaddrd
 * @property string $P_offaddrm
 * @property integer $P_phd
 * @property integer $P_phm
 * @property string $P_emaild
 * @property string $P_emailm
 */
class Preadmission extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Preadmission the static model class
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
		return 'preadmission';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('S_fname, S_mname, S_lname, S_class, S_school, S_school_timings, S_dob, S_bg, S_gender, S_addr, S_city, S_state, S_pincode, S_telephone, S_ph, S_email, sc_id, p_mom, P_offaddrd, P_offaddrm, P_phd, P_phm, P_emaild, P_emailm', 'required'),
			array('S_class, S_pincode, S_telephone, S_ph, sc_id, P_phd, P_phm, photo_file_size, batch_id', 'numerical', 'integerOnly'=>true),
			array('S_fname, S_mname, S_lname', 'length', 'max'=>30),
			array('S_school, S_school_timings, p_mom', 'length', 'max'=>50),
			array('S_bg', 'length', 'max'=>5),
			array('S_gender', 'length', 'max'=>10),
			array('S_addr, S_city, S_state, P_offaddrd, P_offaddrm', 'length', 'max'=>255),
			array('S_email, P_emaild, P_emailm', 'length', 'max'=>200),
			array('photo_file_name, photo_content_type', 'length', 'max'=>255),
			array('photo_data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('photo_data', 'file', 'types'=>'jpg, gif, png', 'allowEmpty' => true),
			array('id, S_fname, S_mname, S_lname, S_class, S_school, S_school_timings, S_dob, S_bg, S_gender, S_addr, S_city, S_state, S_pincode, S_telephone, S_ph, S_email, sc_id, p_mom, P_offaddrd, P_offaddrm, P_phd, P_phm, P_emaild, P_emailm, photo_file_name, photo_content_type, photo_data, photo_file_size', 'safe', 'on'=>'search'),
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
			'S_fname' => 'S Fname',
			'S_mname' => 'S Mname',
			'S_lname' => 'S Lname',
			'S_class' => 'S Class',
			'S_school' => 'S School',
			'S_school_timings' => 'S School Timings',
			'S_dob' => 'S Dob',
			'S_bg' => 'S Bg',
			'S_gender' => 'S Gender',
			'S_addr' => 'S Addr',
			'S_city' => 'S City',
			'S_state' => 'S State',
			'S_pincode' => 'S Pincode',
			'S_telephone' => 'S Telephone',
			'S_ph' => 'S Ph',
			'S_email' => 'S Email',
			'sc_id' => 'Sc',
			'p_mom' => 'P Mom',
			'P_offaddrd' => 'P Offaddrd',
			'P_offaddrm' => 'P Offaddrm',
			'P_phd' => 'P Phd',
			'P_phm' => 'P Phm',
			'P_emaild' => 'P Emaild',
			'P_emailm' => 'P Emailm',
			'photo_file_name' => 'Photo File Name',
			'photo_content_type' => 'Photo Content Type',
			'photo_data' => 'Photo Data',
			'photo_file_size' => 'Photo File Size',
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
		$criteria->compare('S_fname',$this->S_fname,true);
		$criteria->compare('S_mname',$this->S_mname,true);
		$criteria->compare('S_lname',$this->S_lname,true);
		$criteria->compare('S_class',$this->S_class);
		$criteria->compare('S_school',$this->S_school,true);
		$criteria->compare('S_school_timings',$this->S_school_timings,true);
		$criteria->compare('S_dob',$this->S_dob,true);
		$criteria->compare('S_bg',$this->S_bg,true);
		$criteria->compare('S_gender',$this->S_gender,true);
		$criteria->compare('S_addr',$this->S_addr,true);
		$criteria->compare('S_city',$this->S_city,true);
		$criteria->compare('S_state',$this->S_state,true);
		$criteria->compare('S_pincode',$this->S_pincode);
		$criteria->compare('S_telephone',$this->S_telephone);
		$criteria->compare('S_ph',$this->S_ph);
		$criteria->compare('S_email',$this->S_email,true);
		$criteria->compare('sc_id',$this->sc_id);
		$criteria->compare('p_mom',$this->p_mom,true);
		$criteria->compare('P_offaddrd',$this->P_offaddrd,true);
		$criteria->compare('P_offaddrm',$this->P_offaddrm,true);
		$criteria->compare('P_phd',$this->P_phd);
		$criteria->compare('P_phm',$this->P_phm);
		$criteria->compare('P_emaild',$this->P_emaild,true);
		$criteria->compare('P_emailm',$this->P_emailm,true);
		$criteria->compare('photo_file_name',$this->photo_file_name,true);
		$criteria->compare('photo_content_type',$this->photo_content_type,true);
		$criteria->compare('photo_data',$this->photo_data,true);
		$criteria->compare('photo_file_size',$this->photo_file_size);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getClassOptions()
    {
                $connection = Yii::app()->db;
                $command = "select class from subject";
                $dataReader=$connection->createCommand($command)->query();
                $rows=$dataReader->readAll();
                return $rows;
                
    }
}