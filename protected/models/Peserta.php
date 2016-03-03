<?php


class Peserta extends CActiveRecord
{
	
	public function tableName()
	{
		return 'peserta';
	}

	/*protected function beforeSave() {
        if (parent::beforeSave()) {
            $this->password = $this->encrypt($this->password);
            return TRUE;
        } else {
            return FALSE;
        }
    }*/


						

public function formatStatus() {
        if ($this->STATUS == 0)
            return "Pending";
        else if ($this->STATUS == 1)
            return "Diterima";
        else
        	return "Ditolak";
    }

public function cekstatus($id) {
		$status = Peserta::model()->findByAttributes(array('ID_PESERTA' => $id, 'STATUS' => '0'));	
		return $status;
	}

public function formatStatushasil() {
        if ($this->STATUS_HASIL == 0)
            return "Pending";
        else if ($this->STATUS_HASIL == 1)
            return "Diterima";
        else
        	return "Ditolak";
    }


    public function encrypt($value) {
        return md5($value);
    }
	
	public function rules()
	{
		
		return array(
			array('status_peserta', 'numerical', 'integerOnly' => true),
			array('FOTO_PESERTA , NAMA , NO_ID , JUDUL , username , password , EMAIL', 'required'),
			array('NAMA, NO_ID, JUDUL, ASAL_INS, BIDANG, PEKERJAAN, ALAMAT, LOKASI_PT, PENANGGUNG_JAWAB, JENIS_KELAMIN, FOTO_PESERTA, username, password, EMAIL, STATUS, STATUS_HASIL, TEMPAT_LAHIR, code_reg', 'length', 'max'=>1024),
			array('NO_HP', 'length', 'max'=>15),
			array('MASA_BERLAKU_AWAL, MASA_BERLAKU_AKHIR, TANGGAL_MODIFIKASI, TANGGAL_LAHIR', 'safe'),
			
			array('ID_PESERTA, NAMA, NO_ID, JUDUL, ASAL_INS, BIDANG, PEKERJAAN, ALAMAT, LOKASI_PT, PENANGGUNG_JAWAB, JENIS_KELAMIN, FOTO_PESERTA, username, password, NO_HP, EMAIL, STATUS, MASA_BERLAKU_AWAL, MASA_BERLAKU_AKHIR, TANGGAL_MODIFIKASI, TEMPAT_LAHIR, TANGGAL_LAHIR', 'safe', 'on'=>'search'),
		);
	}

	
	public function relations()
	{
		
		return array(
			'hasils' => array(self::HAS_MANY, 'Hasil', 'ID_PESERTA'),
			'proposals' => array(self::HAS_MANY, 'Proposal', 'ID_PESERTA'),
			'syarats' => array(self::HAS_MANY, 'Syarat', 'ID_PESERTA'),
		);
	}


public function randomCode() {
        /* buat karakter yang akan di random */
        $RANDCODE = "qwertyuiopasdfghjklzxcvbnm0123456789";

        /* untuk mengacak kode */
        srand((double) microtime() * 1000000);
        $i = 0;
        $generateCode = '';
        /* lopping sebanyak 7kali */
        while ($i <= 7) {
            /* kode random */
            $num = rand() % 34;
            /* ambil karaktar dari $RANDCODE dengan posisi nya 
             * diacak oleh $num */
            $tmp = substr($RANDCODE, $num, 1);
            /* hasil generate kode ditampung ke $generateCode */
            $generateCode = $generateCode . $tmp;
            $i++;
        }
        /* kembalikan nilai function ke $generateCode */
        return strtoupper($generateCode);
    }

	
	public function attributeLabels()
	{
		return array(
			'ID_PESERTA' => 'Id Peserta',
			'NAMA' => 'Nama Lengkap',
			'NO_ID' => 'No Identitas',
			'JUDUL' => 'Judul Penelitian/ Pengembangan',
			'ASAL_INS' => 'Asal Instansi',
			'BIDANG' => 'Bidang',
			'PEKERJAAN' => 'Pekerjaan',
			'ALAMAT' => 'Alamat',
			'LOKASI_PT' => 'Lokasi Penelitian',
			'PENANGGUNG_JAWAB' => 'Penanggung Jawab',
			'JENIS_KELAMIN' => 'Jenis Kelamin',
			'FOTO_PESERTA' => 'Foto Peserta',
			'username' => 'Username',
			'password' => 'Password',
			'NO_HP' => 'No Handphone',
			'EMAIL' => 'Email',
			'STATUS' => 'Status Proposal',
			'MASA_BERLAKU_AWAL' => 'Masa Berlaku Awal',
			'MASA_BERLAKU_AKHIR' => 'Masa Berlaku Akhir',
			'TANGGAL_MODIFIKASI' => 'Tanggal Modifikasi',
			'TEMPAT_LAHIR' => 'Tempat Lahir',
			'TANGGAL_LAHIR' => 'Tanggal Lahir',
			'code_reg' => 'Kode Registrasi',
			'status_peserta' => 'Status Peserta',
			'STATUS_HASIL' => 'Status Hasil'
		);
	}

	
	public function search()
	{
		
		$criteria=new CDbCriteria;

		$criteria->compare('ID_PESERTA',$this->ID_PESERTA);
		$criteria->compare('NAMA',$this->NAMA,true);
		$criteria->compare('NO_ID',$this->NO_ID,true);
		$criteria->compare('JUDUL',$this->JUDUL,true);
		$criteria->compare('ASAL_INS',$this->ASAL_INS,true);
		$criteria->compare('BIDANG',$this->BIDANG,true);
		$criteria->compare('PEKERJAAN',$this->PEKERJAAN,true);
		$criteria->compare('ALAMAT',$this->ALAMAT,true);
		$criteria->compare('LOKASI_PT',$this->LOKASI_PT,true);
		$criteria->compare('PENANGGUNG_JAWAB',$this->PENANGGUNG_JAWAB,true);
		$criteria->compare('JENIS_KELAMIN',$this->JENIS_KELAMIN,true);
		$criteria->compare('FOTO_PESERTA',$this->FOTO_PESERTA,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('NO_HP',$this->NO_HP,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('STATUS',$this->STATUS,true);
		$criteria->compare('MASA_BERLAKU_AWAL',$this->MASA_BERLAKU_AWAL,true);
		$criteria->compare('MASA_BERLAKU_AKHIR',$this->MASA_BERLAKU_AKHIR,true);
		$criteria->compare('TANGGAL_MODIFIKASI',$this->TANGGAL_MODIFIKASI,true);
		$criteria->compare('TEMPAT_LAHIR',$this->TEMPAT_LAHIR,true);
		$criteria->compare('TANGGAL_LAHIR',$this->TANGGAL_LAHIR,true);
		$criteria->compare('status_peserta',$this->status_peserta,true);
		$criteria->compare('code_reg',$this->code_reg,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
