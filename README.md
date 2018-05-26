# Proje Hakkında
<br>

Yii2 Framework ile üzerinde çalışılan modül "*search*" adına sahiptir. Bu modülde veri tabanında bulunanlar veriler arasında arama yapılabilmektedir. 

Search modülü, https://github.com/kouosl/portal projesi altındaki modüllerden bir tanesidir.

<br>

Proje Vagrant Sanal Makinesi kullanılarak oluşturulmuştur. Sanal Makine(Vagrant) kurulumu için "*https://github.com/kouosl/portal*" kaynağı kullanılmıştır. Projede veri tabanı olarak phpMyAdmin kullanılmıştır. Proje için "*main*" ve "*subject*" olmak üzere 2 adet veri tabanı tablosu kullanılmıştır ve tablo yapısı projede migrations altında oluşturulmuştur.

###### Main Table
```
$this->createTable('{{%main}}',array(          
'keywordID' => $this -> primaryKey(),         
'keyword' => $this -> string(20),          
'wordContent' => $this -> text(), ));
```
<br>

###### Subject Table
```
$this->createTable('{{%subject}}',array(          
'keywordID' => $this -> primaryKey(),          
'keywordType' => $this -> string(200),			
'wordContent' => $this -> text(), ));
```
<br>

Tablolar arasında ki bağlantı yine migrations ile Foreign Key yapısı ile kurulmuştur.

```
        $this->addForeignKey(
            'fk_main_keywordID',
            'subject',
            'keywordID',
            'main',
            'keywordID',
            'CASCADE'
        );

```

<br>

search modülü içinde main ve subject tablosu için ayrı 2 migration yapısı yerine tek bir migration kullanılmıştır. 
Erişim Linki: "*https://github.com/TugbaNurTuran/search/blob/master/migrations/m180426_100343_search.php*"

Modül için oluşturulan arayüz yapısına "*http://portal.kouosl/admin/search/main*" linki ile ulaşılmaktadır.

