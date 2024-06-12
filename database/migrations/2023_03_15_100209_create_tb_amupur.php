<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTbAmupur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_amupur', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("code",10)->nullable();
            $table->string("name_th",100)->nullable();
            $table->string("name_en",100)->nullable();
            $table->integer("province_id")->nullable();

            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->datetime('deleted_at')->nullable();
        });

        DB::table('tb_amupur')->insert([
            [ "id" => "1" ,"code" => "1001" ,"name_th" => "เขตพระนคร" ,"name_en" => "Khet Phra Nakhon" ,"province_id" => "1" ],
            [ "id" => "2" ,"code" => "1002" ,"name_th" => "เขตดุสิต" ,"name_en" => "Khet Dusit" ,"province_id" => "1" ],
            [ "id" => "3" ,"code" => "1003" ,"name_th" => "เขตหนองจอก" ,"name_en" => "Khet Nong Chok" ,"province_id" => "1" ],
            [ "id" => "4" ,"code" => "1004" ,"name_th" => "เขตบางรัก" ,"name_en" => "Khet Bang Rak" ,"province_id" => "1" ],
            [ "id" => "5" ,"code" => "1005" ,"name_th" => "เขตบางเขน" ,"name_en" => "Khet Bang Khen" ,"province_id" => "1" ],
            [ "id" => "6" ,"code" => "1006" ,"name_th" => "เขตบางกะปิ" ,"name_en" => "Khet Bang Kapi" ,"province_id" => "1" ],
            [ "id" => "7" ,"code" => "1007" ,"name_th" => "เขตปทุมวัน" ,"name_en" => "Khet Pathum Wan" ,"province_id" => "1" ],
            [ "id" => "8" ,"code" => "1008" ,"name_th" => "เขตป้อมปราบศัตรูพ่าย" ,"name_en" => "Khet Pom Prap Sattru Phai" ,"province_id" => "1" ],
            [ "id" => "9" ,"code" => "1009" ,"name_th" => "เขตพระโขนง" ,"name_en" => "Khet Phra Khanong" ,"province_id" => "1" ],
            [ "id" => "10" ,"code" => "1010" ,"name_th" => "เขตมีนบุรี" ,"name_en" => "Khet Min Buri" ,"province_id" => "1" ],
            [ "id" => "11" ,"code" => "1011" ,"name_th" => "เขตลาดกระบัง" ,"name_en" => "Khet Lat Krabang" ,"province_id" => "1" ],
            [ "id" => "12" ,"code" => "1012" ,"name_th" => "เขตยานนาวา" ,"name_en" => "Khet Yan Nawa" ,"province_id" => "1" ],
            [ "id" => "13" ,"code" => "1013" ,"name_th" => "เขตสัมพันธวงศ์" ,"name_en" => "Khet Samphanthawong" ,"province_id" => "1" ],
            [ "id" => "14" ,"code" => "1014" ,"name_th" => "เขตพญาไท" ,"name_en" => "Khet Phaya Thai" ,"province_id" => "1" ],
            [ "id" => "15" ,"code" => "1015" ,"name_th" => "เขตธนบุรี" ,"name_en" => "Khet Thon Buri" ,"province_id" => "1" ],
            [ "id" => "16" ,"code" => "1016" ,"name_th" => "เขตบางกอกใหญ่" ,"name_en" => "Khet Bangkok Yai" ,"province_id" => "1" ],
            [ "id" => "17" ,"code" => "1017" ,"name_th" => "เขตห้วยขวาง" ,"name_en" => "Khet Huai Khwang" ,"province_id" => "1" ],
            [ "id" => "18" ,"code" => "1018" ,"name_th" => "เขตคลองสาน" ,"name_en" => "Khet Khlong San" ,"province_id" => "1" ],
            [ "id" => "19" ,"code" => "1019" ,"name_th" => "เขตตลิ่งชัน" ,"name_en" => "Khet Taling Chan" ,"province_id" => "1" ],
            [ "id" => "20" ,"code" => "1020" ,"name_th" => "เขตบางกอกน้อย" ,"name_en" => "Khet Bangkok Noi" ,"province_id" => "1" ],
            [ "id" => "21" ,"code" => "1021" ,"name_th" => "เขตบางขุนเทียน" ,"name_en" => "Khet Bang Khun Thian" ,"province_id" => "1" ],
            [ "id" => "22" ,"code" => "1022" ,"name_th" => "เขตภาษีเจริญ" ,"name_en" => "Khet Phasi Charoen" ,"province_id" => "1" ],
            [ "id" => "23" ,"code" => "1023" ,"name_th" => "เขตหนองแขม" ,"name_en" => "Khet Nong Khaem" ,"province_id" => "1" ],
            [ "id" => "24" ,"code" => "1024" ,"name_th" => "เขตราษฎร์บูรณะ" ,"name_en" => "Khet Rat Burana" ,"province_id" => "1" ],
            [ "id" => "25" ,"code" => "1025" ,"name_th" => "เขตบางพลัด" ,"name_en" => "Khet Bang Phlat" ,"province_id" => "1" ],
            [ "id" => "26" ,"code" => "1026" ,"name_th" => "เขตดินแดง" ,"name_en" => "Khet Din Daeng" ,"province_id" => "1" ],
            [ "id" => "27" ,"code" => "1027" ,"name_th" => "เขตบึงกุ่ม" ,"name_en" => "Khet Bueng Kum" ,"province_id" => "1" ],
            [ "id" => "28" ,"code" => "1028" ,"name_th" => "เขตสาทร" ,"name_en" => "Khet Sathon" ,"province_id" => "1" ],
            [ "id" => "29" ,"code" => "1029" ,"name_th" => "เขตบางซื่อ" ,"name_en" => "Khet Bang Sue" ,"province_id" => "1" ],
            [ "id" => "30" ,"code" => "1030" ,"name_th" => "เขตจตุจักร" ,"name_en" => "Khet Chatuchak" ,"province_id" => "1" ],
            [ "id" => "31" ,"code" => "1031" ,"name_th" => "เขตบางคอแหลม" ,"name_en" => "Khet Bang Kho Laem" ,"province_id" => "1" ],
            [ "id" => "32" ,"code" => "1032" ,"name_th" => "เขตประเวศ" ,"name_en" => "Khet Prawet" ,"province_id" => "1" ],
            [ "id" => "33" ,"code" => "1033" ,"name_th" => "เขตคลองเตย" ,"name_en" => "Khet Khlong Toei" ,"province_id" => "1" ],
            [ "id" => "34" ,"code" => "1034" ,"name_th" => "เขตสวนหลวง" ,"name_en" => "Khet Suan Luang" ,"province_id" => "1" ],
            [ "id" => "35" ,"code" => "1035" ,"name_th" => "เขตจอมทอง" ,"name_en" => "Khet Chom Thong" ,"province_id" => "1" ],
            [ "id" => "36" ,"code" => "1036" ,"name_th" => "เขตดอนเมือง" ,"name_en" => "Khet Don Mueang" ,"province_id" => "1" ],
            [ "id" => "37" ,"code" => "1037" ,"name_th" => "เขตราชเทวี" ,"name_en" => "Khet Ratchathewi" ,"province_id" => "1" ],
            [ "id" => "38" ,"code" => "1038" ,"name_th" => "เขตลาดพร้าว" ,"name_en" => "Khet Lat Phrao" ,"province_id" => "1" ],
            [ "id" => "39" ,"code" => "1039" ,"name_th" => "เขตวัฒนา" ,"name_en" => "Khet Watthana" ,"province_id" => "1" ],
            [ "id" => "40" ,"code" => "1040" ,"name_th" => "เขตบางแค" ,"name_en" => "Khet Bang Khae" ,"province_id" => "1" ],
            [ "id" => "41" ,"code" => "1041" ,"name_th" => "เขตหลักสี่" ,"name_en" => "Khet Lak Si" ,"province_id" => "1" ],
            [ "id" => "42" ,"code" => "1042" ,"name_th" => "เขตสายไหม" ,"name_en" => "Khet Sai Mai" ,"province_id" => "1" ],
            [ "id" => "43" ,"code" => "1043" ,"name_th" => "เขตคันนายาว" ,"name_en" => "Khet Khan Na Yao" ,"province_id" => "1" ],
            [ "id" => "44" ,"code" => "1044" ,"name_th" => "เขตสะพานสูง" ,"name_en" => "Khet Saphan Sung" ,"province_id" => "1" ],
            [ "id" => "45" ,"code" => "1045" ,"name_th" => "เขตวังทองหลาง" ,"name_en" => "Khet Wang Thonglang" ,"province_id" => "1" ],
            [ "id" => "46" ,"code" => "1046" ,"name_th" => "เขตคลองสามวา" ,"name_en" => "Khet Khlong Sam Wa" ,"province_id" => "1" ],
            [ "id" => "47" ,"code" => "1047" ,"name_th" => "เขตบางนา" ,"name_en" => "Khet Bang Na" ,"province_id" => "1" ],
            [ "id" => "48" ,"code" => "1048" ,"name_th" => "เขตทวีวัฒนา" ,"name_en" => "Khet Thawi Watthana" ,"province_id" => "1" ],
            [ "id" => "49" ,"code" => "1049" ,"name_th" => "เขตทุ่งครุ" ,"name_en" => "Khet Thung Khru" ,"province_id" => "1" ],
            [ "id" => "50" ,"code" => "1050" ,"name_th" => "เขตบางบอน" ,"name_en" => "Khet Bang Bon" ,"province_id" => "1" ],
            [ "id" => "51" ,"code" => "1081" ,"name_th" => "*บ้านทะวาย" ,"name_en" => "*Bantawai" ,"province_id" => "1" ],
            [ "id" => "52" ,"code" => "1101" ,"name_th" => "เมืองสมุทรปราการ" ,"name_en" => "Mueang Samut Prakan" ,"province_id" => "2" ],
            [ "id" => "53" ,"code" => "1102" ,"name_th" => "บางบ่อ" ,"name_en" => "Bang Bo" ,"province_id" => "2" ],
            [ "id" => "54" ,"code" => "1103" ,"name_th" => "บางพลี" ,"name_en" => "Bang Phli" ,"province_id" => "2" ],
            [ "id" => "55" ,"code" => "1104" ,"name_th" => "พระประแดง" ,"name_en" => "Phra Pradaeng" ,"province_id" => "2" ],
            [ "id" => "56" ,"code" => "1105" ,"name_th" => "พระสมุทรเจดีย์" ,"name_en" => "Phra Samut Chedi" ,"province_id" => "2" ],
            [ "id" => "57" ,"code" => "1106" ,"name_th" => "บางเสาธง" ,"name_en" => "Bang Sao Thong" ,"province_id" => "2" ],
            [ "id" => "58" ,"code" => "1201" ,"name_th" => "เมืองนนทบุรี" ,"name_en" => "Mueang Nonthaburi" ,"province_id" => "3" ],
            [ "id" => "59" ,"code" => "1202" ,"name_th" => "บางกรวย" ,"name_en" => "Bang Kruai" ,"province_id" => "3" ],
            [ "id" => "60" ,"code" => "1203" ,"name_th" => "บางใหญ่" ,"name_en" => "Bang Yai" ,"province_id" => "3" ],
            [ "id" => "61" ,"code" => "1204" ,"name_th" => "บางบัวทอง" ,"name_en" => "Bang Bua Thong" ,"province_id" => "3" ],
            [ "id" => "62" ,"code" => "1205" ,"name_th" => "ไทรน้อย" ,"name_en" => "Sai Noi" ,"province_id" => "3" ],
            [ "id" => "63" ,"code" => "1206" ,"name_th" => "ปากเกร็ด" ,"name_en" => "Pak Kret" ,"province_id" => "3" ],
            [ "id" => "64" ,"code" => "1251" ,"name_th" => "เทศบาลนครนนทบุรี (สาขาแขวงท่าทราย)*" ,"name_en" => "Tetsaban Nonthaburi" ,"province_id" => "3" ],
            [ "id" => "65" ,"code" => "1297" ,"name_th" => "เทศบาลเมืองปากเกร็ด*" ,"name_en" => "Tetsaban Pak Kret" ,"province_id" => "3" ],
            [ "id" => "66" ,"code" => "1301" ,"name_th" => "เมืองปทุมธานี" ,"name_en" => "Mueang Pathum Thani" ,"province_id" => "4" ],
            [ "id" => "67" ,"code" => "1302" ,"name_th" => "คลองหลวง" ,"name_en" => "Khlong Luang" ,"province_id" => "4" ],
            [ "id" => "68" ,"code" => "1303" ,"name_th" => "ธัญบุรี" ,"name_en" => "Thanyaburi" ,"province_id" => "4" ],
            [ "id" => "69" ,"code" => "1304" ,"name_th" => "หนองเสือ" ,"name_en" => "Nong Suea" ,"province_id" => "4" ],
            [ "id" => "70" ,"code" => "1305" ,"name_th" => "ลาดหลุมแก้ว" ,"name_en" => "Lat Lum Kaeo" ,"province_id" => "4" ],
            [ "id" => "71" ,"code" => "1306" ,"name_th" => "ลำลูกกา" ,"name_en" => "Lam Luk Ka" ,"province_id" => "4" ],
            [ "id" => "72" ,"code" => "1307" ,"name_th" => "สามโคก" ,"name_en" => "Sam Khok" ,"province_id" => "4" ],
            [ "id" => "73" ,"code" => "1351" ,"name_th" => "ลำลูกกา (สาขาตำบลคูคต)*" ,"name_en" => "Khlong Luang(Kukod)" ,"province_id" => "4" ],
            [ "id" => "74" ,"code" => "1401" ,"name_th" => "พระนครศรีอยุธยา" ,"name_en" => "Phra Nakhon Si Ayutthaya" ,"province_id" => "5" ],
            [ "id" => "75" ,"code" => "1402" ,"name_th" => "ท่าเรือ" ,"name_en" => "Tha Ruea" ,"province_id" => "5" ],
            [ "id" => "76" ,"code" => "1403" ,"name_th" => "นครหลวง" ,"name_en" => "Nakhon Luang" ,"province_id" => "5" ],
            [ "id" => "77" ,"code" => "1404" ,"name_th" => "บางไทร" ,"name_en" => "Bang Sai" ,"province_id" => "5" ],
            [ "id" => "78" ,"code" => "1405" ,"name_th" => "บางบาล" ,"name_en" => "Bang Ban" ,"province_id" => "5" ],
            [ "id" => "79" ,"code" => "1406" ,"name_th" => "บางปะอิน" ,"name_en" => "Bang Pa-in" ,"province_id" => "5" ],
            [ "id" => "80" ,"code" => "1407" ,"name_th" => "บางปะหัน" ,"name_en" => "Bang Pahan" ,"province_id" => "5" ],
            [ "id" => "81" ,"code" => "1408" ,"name_th" => "ผักไห่" ,"name_en" => "Phak Hai" ,"province_id" => "5" ],
            [ "id" => "82" ,"code" => "1409" ,"name_th" => "ภาชี" ,"name_en" => "Phachi" ,"province_id" => "5" ],
            [ "id" => "83" ,"code" => "1410" ,"name_th" => "ลาดบัวหลวง" ,"name_en" => "Lat Bua Luang" ,"province_id" => "5" ],
            [ "id" => "84" ,"code" => "1411" ,"name_th" => "วังน้อย" ,"name_en" => "Wang Noi" ,"province_id" => "5" ],
            [ "id" => "85" ,"code" => "1412" ,"name_th" => "เสนา" ,"name_en" => "Sena" ,"province_id" => "5" ],
            [ "id" => "86" ,"code" => "1413" ,"name_th" => "บางซ้าย" ,"name_en" => "Bang Sai" ,"province_id" => "5" ],
            [ "id" => "87" ,"code" => "1414" ,"name_th" => "อุทัย" ,"name_en" => "Uthai" ,"province_id" => "5" ],
            [ "id" => "88" ,"code" => "1415" ,"name_th" => "มหาราช" ,"name_en" => "Maha Rat" ,"province_id" => "5" ],
            [ "id" => "89" ,"code" => "1416" ,"name_th" => "บ้านแพรก" ,"name_en" => "Ban Phraek" ,"province_id" => "5" ],
            [ "id" => "90" ,"code" => "1501" ,"name_th" => "เมืองอ่างทอง" ,"name_en" => "Mueang Ang Thong" ,"province_id" => "6" ],
            [ "id" => "91" ,"code" => "1502" ,"name_th" => "ไชโย" ,"name_en" => "Chaiyo" ,"province_id" => "6" ],
            [ "id" => "92" ,"code" => "1503" ,"name_th" => "ป่าโมก" ,"name_en" => "Pa Mok" ,"province_id" => "6" ],
            [ "id" => "93" ,"code" => "1504" ,"name_th" => "โพธิ์ทอง" ,"name_en" => "Pho Thong" ,"province_id" => "6" ],
            [ "id" => "94" ,"code" => "1505" ,"name_th" => "แสวงหา" ,"name_en" => "Sawaeng Ha" ,"province_id" => "6" ],
            [ "id" => "95" ,"code" => "1506" ,"name_th" => "วิเศษชัยชาญ" ,"name_en" => "Wiset Chai Chan" ,"province_id" => "6" ],
            [ "id" => "96" ,"code" => "1507" ,"name_th" => "สามโก้" ,"name_en" => "Samko" ,"province_id" => "6" ],
            [ "id" => "97" ,"code" => "1601" ,"name_th" => "เมืองลพบุรี" ,"name_en" => "Mueang Lop Buri" ,"province_id" => "7" ],
            [ "id" => "98" ,"code" => "1602" ,"name_th" => "พัฒนานิคม" ,"name_en" => "Phatthana Nikhom" ,"province_id" => "7" ],
            [ "id" => "99" ,"code" => "1603" ,"name_th" => "โคกสำโรง" ,"name_en" => "Khok Samrong" ,"province_id" => "7" ],
            [ "id" => "100" ,"code" => "1604" ,"name_th" => "ชัยบาดาล" ,"name_en" => "Chai Badan" ,"province_id" => "7" ],
            [ "id" => "101" ,"code" => "1605" ,"name_th" => "ท่าวุ้ง" ,"name_en" => "Tha Wung" ,"province_id" => "7" ],
            [ "id" => "102" ,"code" => "1606" ,"name_th" => "บ้านหมี่" ,"name_en" => "Ban Mi" ,"province_id" => "7" ],
            [ "id" => "103" ,"code" => "1607" ,"name_th" => "ท่าหลวง" ,"name_en" => "Tha Luang" ,"province_id" => "7" ],
            [ "id" => "104" ,"code" => "1608" ,"name_th" => "สระโบสถ์" ,"name_en" => "Sa Bot" ,"province_id" => "7" ],
            [ "id" => "105" ,"code" => "1609" ,"name_th" => "โคกเจริญ" ,"name_en" => "Khok Charoen" ,"province_id" => "7" ],
            [ "id" => "106" ,"code" => "1610" ,"name_th" => "ลำสนธิ" ,"name_en" => "Lam Sonthi" ,"province_id" => "7" ],
            [ "id" => "107" ,"code" => "1611" ,"name_th" => "หนองม่วง" ,"name_en" => "Nong Muang" ,"province_id" => "7" ],
            [ "id" => "108" ,"code" => "1681" ,"name_th" => "*อ.บ้านเช่า จ.ลพบุรี" ,"name_en" => "*Amphoe Ban Chao" ,"province_id" => "7" ],
            [ "id" => "109" ,"code" => "1701" ,"name_th" => "เมืองสิงห์บุรี" ,"name_en" => "Mueang Sing Buri" ,"province_id" => "8" ],
            [ "id" => "110" ,"code" => "1702" ,"name_th" => "บางระจัน" ,"name_en" => "Bang Rachan" ,"province_id" => "8" ],
            [ "id" => "111" ,"code" => "1703" ,"name_th" => "ค่ายบางระจัน" ,"name_en" => "Khai Bang Rachan" ,"province_id" => "8" ],
            [ "id" => "112" ,"code" => "1704" ,"name_th" => "พรหมบุรี" ,"name_en" => "Phrom Buri" ,"province_id" => "8" ],
            [ "id" => "113" ,"code" => "1705" ,"name_th" => "ท่าช้าง" ,"name_en" => "Tha Chang" ,"province_id" => "8" ],
            [ "id" => "114" ,"code" => "1706" ,"name_th" => "อินทร์บุรี" ,"name_en" => "In Buri" ,"province_id" => "8" ],
            [ "id" => "115" ,"code" => "1801" ,"name_th" => "เมืองชัยนาท" ,"name_en" => "Mueang Chai Nat" ,"province_id" => "9" ],
            [ "id" => "116" ,"code" => "1802" ,"name_th" => "มโนรมย์" ,"name_en" => "Manorom" ,"province_id" => "9" ],
            [ "id" => "117" ,"code" => "1803" ,"name_th" => "วัดสิงห์" ,"name_en" => "Wat Sing" ,"province_id" => "9" ],
            [ "id" => "118" ,"code" => "1804" ,"name_th" => "สรรพยา" ,"name_en" => "Sapphaya" ,"province_id" => "9" ],
            [ "id" => "119" ,"code" => "1805" ,"name_th" => "สรรคบุรี" ,"name_en" => "Sankhaburi" ,"province_id" => "9" ],
            [ "id" => "120" ,"code" => "1806" ,"name_th" => "หันคา" ,"name_en" => "Hankha" ,"province_id" => "9" ],
            [ "id" => "121" ,"code" => "1807" ,"name_th" => "หนองมะโมง" ,"name_en" => "Nong Mamong" ,"province_id" => "9" ],
            [ "id" => "122" ,"code" => "1808" ,"name_th" => "เนินขาม" ,"name_en" => "Noen Kham" ,"province_id" => "9" ],
            [ "id" => "123" ,"code" => "1901" ,"name_th" => "เมืองสระบุรี" ,"name_en" => "Mueang Saraburi" ,"province_id" => "10" ],
            [ "id" => "124" ,"code" => "1902" ,"name_th" => "แก่งคอย" ,"name_en" => "Kaeng Khoi" ,"province_id" => "10" ],
            [ "id" => "125" ,"code" => "1903" ,"name_th" => "หนองแค" ,"name_en" => "Nong Khae" ,"province_id" => "10" ],
            [ "id" => "126" ,"code" => "1904" ,"name_th" => "วิหารแดง" ,"name_en" => "Wihan Daeng" ,"province_id" => "10" ],
            [ "id" => "127" ,"code" => "1905" ,"name_th" => "หนองแซง" ,"name_en" => "Nong Saeng" ,"province_id" => "10" ],
            [ "id" => "128" ,"code" => "1906" ,"name_th" => "บ้านหมอ" ,"name_en" => "Ban Mo" ,"province_id" => "10" ],
            [ "id" => "129" ,"code" => "1907" ,"name_th" => "ดอนพุด" ,"name_en" => "Don Phut" ,"province_id" => "10" ],
            [ "id" => "130" ,"code" => "1908" ,"name_th" => "หนองโดน" ,"name_en" => "Nong Don" ,"province_id" => "10" ],
            [ "id" => "131" ,"code" => "1909" ,"name_th" => "พระพุทธบาท" ,"name_en" => "Phra Phutthabat" ,"province_id" => "10" ],
            [ "id" => "132" ,"code" => "1910" ,"name_th" => "เสาไห้" ,"name_en" => "Sao Hai" ,"province_id" => "10" ],
            [ "id" => "133" ,"code" => "1911" ,"name_th" => "มวกเหล็ก" ,"name_en" => "Muak Lek" ,"province_id" => "10" ],
            [ "id" => "134" ,"code" => "1912" ,"name_th" => "วังม่วง" ,"name_en" => "Wang Muang" ,"province_id" => "10" ],
            [ "id" => "135" ,"code" => "1913" ,"name_th" => "เฉลิมพระเกียรติ" ,"name_en" => "Chaloem Phra Kiat" ,"province_id" => "10" ],
            [ "id" => "136" ,"code" => "2001" ,"name_th" => "เมืองชลบุรี" ,"name_en" => "Mueang Chon Buri" ,"province_id" => "11" ],
            [ "id" => "137" ,"code" => "2002" ,"name_th" => "บ้านบึง" ,"name_en" => "Ban Bueng" ,"province_id" => "11" ],
            [ "id" => "138" ,"code" => "2003" ,"name_th" => "หนองใหญ่" ,"name_en" => "Nong Yai" ,"province_id" => "11" ],
            [ "id" => "139" ,"code" => "2004" ,"name_th" => "บางละมุง" ,"name_en" => "Bang Lamung" ,"province_id" => "11" ],
            [ "id" => "140" ,"code" => "2005" ,"name_th" => "พานทอง" ,"name_en" => "Phan Thong" ,"province_id" => "11" ],
            [ "id" => "141" ,"code" => "2006" ,"name_th" => "พนัสนิคม" ,"name_en" => "Phanat Nikhom" ,"province_id" => "11" ],
            [ "id" => "142" ,"code" => "2007" ,"name_th" => "ศรีราชา" ,"name_en" => "Si Racha" ,"province_id" => "11" ],
            [ "id" => "143" ,"code" => "2008" ,"name_th" => "เกาะสีชัง" ,"name_en" => "Ko Sichang" ,"province_id" => "11" ],
            [ "id" => "144" ,"code" => "2009" ,"name_th" => "สัตหีบ" ,"name_en" => "Sattahip" ,"province_id" => "11" ],
            [ "id" => "145" ,"code" => "2010" ,"name_th" => "บ่อทอง" ,"name_en" => "Bo Thong" ,"province_id" => "11" ],
            [ "id" => "146" ,"code" => "2011" ,"name_th" => "เกาะจันทร์" ,"name_en" => "Ko Chan" ,"province_id" => "11" ],
            [ "id" => "147" ,"code" => "2051" ,"name_th" => "สัตหีบ (สาขาตำบลบางเสร่)*" ,"name_en" => "Sattahip(Bang Sre)*" ,"province_id" => "11" ],
            [ "id" => "148" ,"code" => "2072" ,"name_th" => "ท้องถิ่นเทศบาลเมืองหนองปรือ*" ,"name_en" => "Tong Tin Tetsaban Mueang Nong Prue*" ,"province_id" => "11" ],
            [ "id" => "149" ,"code" => "2093" ,"name_th" => "เทศบาลตำบลแหลมฉบัง*" ,"name_en" => "Tetsaban Tambon Lamsabang*" ,"province_id" => "11" ],
            [ "id" => "150" ,"code" => "2099" ,"name_th" => "เทศบาลเมืองชลบุรี*" ,"name_en" => "Mueang Chon Buri" ,"province_id" => "11" ],
            [ "id" => "151" ,"code" => "2101" ,"name_th" => "เมืองระยอง" ,"name_en" => "Mueang Rayong" ,"province_id" => "12" ],
            [ "id" => "152" ,"code" => "2102" ,"name_th" => "บ้านฉาง" ,"name_en" => "Ban Chang" ,"province_id" => "12" ],
            [ "id" => "153" ,"code" => "2103" ,"name_th" => "แกลง" ,"name_en" => "Klaeng" ,"province_id" => "12" ],
            [ "id" => "154" ,"code" => "2104" ,"name_th" => "วังจันทร์" ,"name_en" => "Wang Chan" ,"province_id" => "12" ],
            [ "id" => "155" ,"code" => "2105" ,"name_th" => "บ้านค่าย" ,"name_en" => "Ban Khai" ,"province_id" => "12" ],
            [ "id" => "156" ,"code" => "2106" ,"name_th" => "ปลวกแดง" ,"name_en" => "Pluak Daeng" ,"province_id" => "12" ],
            [ "id" => "157" ,"code" => "2107" ,"name_th" => "เขาชะเมา" ,"name_en" => "Khao Chamao" ,"province_id" => "12" ],
            [ "id" => "158" ,"code" => "2108" ,"name_th" => "นิคมพัฒนา" ,"name_en" => "Nikhom Phatthana" ,"province_id" => "12" ],
            [ "id" => "159" ,"code" => "2151" ,"name_th" => "สาขาตำบลมาบข่า*" ,"name_en" => "Saka Tambon Mabka" ,"province_id" => "12" ],
            [ "id" => "160" ,"code" => "2201" ,"name_th" => "เมืองจันทบุรี" ,"name_en" => "Mueang Chanthaburi" ,"province_id" => "13" ],
            [ "id" => "161" ,"code" => "2202" ,"name_th" => "ขลุง" ,"name_en" => "Khlung" ,"province_id" => "13" ],
            [ "id" => "162" ,"code" => "2203" ,"name_th" => "ท่าใหม่" ,"name_en" => "Tha Mai" ,"province_id" => "13" ],
            [ "id" => "163" ,"code" => "2204" ,"name_th" => "โป่งน้ำร้อน" ,"name_en" => "Pong Nam Ron" ,"province_id" => "13" ],
            [ "id" => "164" ,"code" => "2205" ,"name_th" => "มะขาม" ,"name_en" => "Makham" ,"province_id" => "13" ],
            [ "id" => "165" ,"code" => "2206" ,"name_th" => "แหลมสิงห์" ,"name_en" => "Laem Sing" ,"province_id" => "13" ],
            [ "id" => "166" ,"code" => "2207" ,"name_th" => "สอยดาว" ,"name_en" => "Soi Dao" ,"province_id" => "13" ],
            [ "id" => "167" ,"code" => "2208" ,"name_th" => "แก่งหางแมว" ,"name_en" => "Kaeng Hang Maeo" ,"province_id" => "13" ],
            [ "id" => "168" ,"code" => "2209" ,"name_th" => "นายายอาม" ,"name_en" => "Na Yai Am" ,"province_id" => "13" ],
            [ "id" => "169" ,"code" => "2210" ,"name_th" => "เขาคิชฌกูฏ" ,"name_en" => "Khoa Khitchakut" ,"province_id" => "13" ],
            [ "id" => "170" ,"code" => "2281" ,"name_th" => "*กิ่ง อ.กำพุธ จ.จันทบุรี" ,"name_en" => "*King Amphoe Kampud" ,"province_id" => "13" ],
            [ "id" => "171" ,"code" => "2301" ,"name_th" => "เมืองตราด" ,"name_en" => "Mueang Trat" ,"province_id" => "14" ],
            [ "id" => "172" ,"code" => "2302" ,"name_th" => "คลองใหญ่" ,"name_en" => "Khlong Yai" ,"province_id" => "14" ],
            [ "id" => "173" ,"code" => "2303" ,"name_th" => "เขาสมิง" ,"name_en" => "Khao Saming" ,"province_id" => "14" ],
            [ "id" => "174" ,"code" => "2304" ,"name_th" => "บ่อไร่" ,"name_en" => "Bo Rai" ,"province_id" => "14" ],
            [ "id" => "175" ,"code" => "2305" ,"name_th" => "แหลมงอบ" ,"name_en" => "Laem Ngop" ,"province_id" => "14" ],
            [ "id" => "176" ,"code" => "2306" ,"name_th" => "เกาะกูด" ,"name_en" => "Ko Kut" ,"province_id" => "14" ],
            [ "id" => "177" ,"code" => "2307" ,"name_th" => "เกาะช้าง" ,"name_en" => "Ko Chang" ,"province_id" => "14" ],
            [ "id" => "178" ,"code" => "2401" ,"name_th" => "เมืองฉะเชิงเทรา" ,"name_en" => "Mueang Chachoengsao" ,"province_id" => "15" ],
            [ "id" => "179" ,"code" => "2402" ,"name_th" => "บางคล้า" ,"name_en" => "Bang Khla" ,"province_id" => "15" ],
            [ "id" => "180" ,"code" => "2403" ,"name_th" => "บางน้ำเปรี้ยว" ,"name_en" => "Bang Nam Priao" ,"province_id" => "15" ],
            [ "id" => "181" ,"code" => "2404" ,"name_th" => "บางปะกง" ,"name_en" => "Bang Pakong" ,"province_id" => "15" ],
            [ "id" => "182" ,"code" => "2405" ,"name_th" => "บ้านโพธิ์" ,"name_en" => "Ban Pho" ,"province_id" => "15" ],
            [ "id" => "183" ,"code" => "2406" ,"name_th" => "พนมสารคาม" ,"name_en" => "Phanom Sarakham" ,"province_id" => "15" ],
            [ "id" => "184" ,"code" => "2407" ,"name_th" => "ราชสาส์น" ,"name_en" => "Ratchasan" ,"province_id" => "15" ],
            [ "id" => "185" ,"code" => "2408" ,"name_th" => "สนามชัยเขต" ,"name_en" => "Sanam Chai Khet" ,"province_id" => "15" ],
            [ "id" => "186" ,"code" => "2409" ,"name_th" => "แปลงยาว" ,"name_en" => "Plaeng Yao" ,"province_id" => "15" ],
            [ "id" => "187" ,"code" => "2410" ,"name_th" => "ท่าตะเกียบ" ,"name_en" => "Tha Takiap" ,"province_id" => "15" ],
            [ "id" => "188" ,"code" => "2411" ,"name_th" => "คลองเขื่อน" ,"name_en" => "Khlong Khuean" ,"province_id" => "15" ],
            [ "id" => "189" ,"code" => "2501" ,"name_th" => "เมืองปราจีนบุรี" ,"name_en" => "Mueang Prachin Buri" ,"province_id" => "16" ],
            [ "id" => "190" ,"code" => "2502" ,"name_th" => "กบินทร์บุรี" ,"name_en" => "Kabin Buri" ,"province_id" => "16" ],
            [ "id" => "191" ,"code" => "2503" ,"name_th" => "นาดี" ,"name_en" => "Na Di" ,"province_id" => "16" ],
            [ "id" => "192" ,"code" => "2504" ,"name_th" => "*สระแก้ว" ,"name_en" => "Sa Kaeo" ,"province_id" => "16" ],
            [ "id" => "193" ,"code" => "2505" ,"name_th" => "*วังน้ำเย็น" ,"name_en" => "Wang Nam Yen" ,"province_id" => "16" ],
            [ "id" => "194" ,"code" => "2506" ,"name_th" => "บ้านสร้าง" ,"name_en" => "Ban Sang" ,"province_id" => "16" ],
            [ "id" => "195" ,"code" => "2507" ,"name_th" => "ประจันตคาม" ,"name_en" => "Prachantakham" ,"province_id" => "16" ],
            [ "id" => "196" ,"code" => "2508" ,"name_th" => "ศรีมหาโพธิ" ,"name_en" => "Si Maha Phot" ,"province_id" => "16" ],
            [ "id" => "197" ,"code" => "2509" ,"name_th" => "ศรีมโหสถ" ,"name_en" => "Si Mahosot" ,"province_id" => "16" ],
            [ "id" => "198" ,"code" => "2510" ,"name_th" => "*อรัญประเทศ" ,"name_en" => "Aranyaprathet" ,"province_id" => "16" ],
            [ "id" => "199" ,"code" => "2511" ,"name_th" => "*ตาพระยา" ,"name_en" => "Ta Phraya" ,"province_id" => "16" ],
            [ "id" => "200" ,"code" => "2512" ,"name_th" => "*วัฒนานคร" ,"name_en" => "Watthana Nakhon" ,"province_id" => "16" ],
            [ "id" => "201" ,"code" => "2513" ,"name_th" => "*คลองหาด" ,"name_en" => "Khlong Hat" ,"province_id" => "16" ],
            [ "id" => "202" ,"code" => "2601" ,"name_th" => "เมืองนครนายก" ,"name_en" => "Mueang Nakhon Nayok" ,"province_id" => "17" ],
            [ "id" => "203" ,"code" => "2602" ,"name_th" => "ปากพลี" ,"name_en" => "Pak Phli" ,"province_id" => "17" ],
            [ "id" => "204" ,"code" => "2603" ,"name_th" => "บ้านนา" ,"name_en" => "Ban Na" ,"province_id" => "17" ],
            [ "id" => "205" ,"code" => "2604" ,"name_th" => "องครักษ์" ,"name_en" => "Ongkharak" ,"province_id" => "17" ],
            [ "id" => "206" ,"code" => "2701" ,"name_th" => "เมืองสระแก้ว" ,"name_en" => "Mueang Sa Kaeo" ,"province_id" => "18" ],
            [ "id" => "207" ,"code" => "2702" ,"name_th" => "คลองหาด" ,"name_en" => "Khlong Hat" ,"province_id" => "18" ],
            [ "id" => "208" ,"code" => "2703" ,"name_th" => "ตาพระยา" ,"name_en" => "Ta Phraya" ,"province_id" => "18" ],
            [ "id" => "209" ,"code" => "2704" ,"name_th" => "วังน้ำเย็น" ,"name_en" => "Wang Nam Yen" ,"province_id" => "18" ],
            [ "id" => "210" ,"code" => "2705" ,"name_th" => "วัฒนานคร" ,"name_en" => "Watthana Nakhon" ,"province_id" => "18" ],
            [ "id" => "211" ,"code" => "2706" ,"name_th" => "อรัญประเทศ" ,"name_en" => "Aranyaprathet" ,"province_id" => "18" ],
            [ "id" => "212" ,"code" => "2707" ,"name_th" => "เขาฉกรรจ์" ,"name_en" => "Khao Chakan" ,"province_id" => "18" ],
            [ "id" => "213" ,"code" => "2708" ,"name_th" => "โคกสูง" ,"name_en" => "Khok Sung" ,"province_id" => "18" ],
            [ "id" => "214" ,"code" => "2709" ,"name_th" => "วังสมบูรณ์" ,"name_en" => "Wang Sombun" ,"province_id" => "18" ],
            [ "id" => "215" ,"code" => "3001" ,"name_th" => "เมืองนครราชสีมา" ,"name_en" => "Mueang Nakhon Ratchasima" ,"province_id" => "19" ],
            [ "id" => "216" ,"code" => "3002" ,"name_th" => "ครบุรี" ,"name_en" => "Khon Buri" ,"province_id" => "19" ],
            [ "id" => "217" ,"code" => "3003" ,"name_th" => "เสิงสาง" ,"name_en" => "Soeng Sang" ,"province_id" => "19" ],
            [ "id" => "218" ,"code" => "3004" ,"name_th" => "คง" ,"name_en" => "Khong" ,"province_id" => "19" ],
            [ "id" => "219" ,"code" => "3005" ,"name_th" => "บ้านเหลื่อม" ,"name_en" => "Ban Lueam" ,"province_id" => "19" ],
            [ "id" => "220" ,"code" => "3006" ,"name_th" => "จักราช" ,"name_en" => "Chakkarat" ,"province_id" => "19" ],
            [ "id" => "221" ,"code" => "3007" ,"name_th" => "โชคชัย" ,"name_en" => "Chok Chai" ,"province_id" => "19" ],
            [ "id" => "222" ,"code" => "3008" ,"name_th" => "ด่านขุนทด" ,"name_en" => "Dan Khun Thot" ,"province_id" => "19" ],
            [ "id" => "223" ,"code" => "3009" ,"name_th" => "โนนไทย" ,"name_en" => "Non Thai" ,"province_id" => "19" ],
            [ "id" => "224" ,"code" => "3010" ,"name_th" => "โนนสูง" ,"name_en" => "Non Sung" ,"province_id" => "19" ],
            [ "id" => "225" ,"code" => "3011" ,"name_th" => "ขามสะแกแสง" ,"name_en" => "Kham Sakaesaeng" ,"province_id" => "19" ],
            [ "id" => "226" ,"code" => "3012" ,"name_th" => "บัวใหญ่" ,"name_en" => "Bua Yai" ,"province_id" => "19" ],
            [ "id" => "227" ,"code" => "3013" ,"name_th" => "ประทาย" ,"name_en" => "Prathai" ,"province_id" => "19" ],
            [ "id" => "228" ,"code" => "3014" ,"name_th" => "ปักธงชัย" ,"name_en" => "Pak Thong Chai" ,"province_id" => "19" ],
            [ "id" => "229" ,"code" => "3015" ,"name_th" => "พิมาย" ,"name_en" => "Phimai" ,"province_id" => "19" ],
            [ "id" => "230" ,"code" => "3016" ,"name_th" => "ห้วยแถลง" ,"name_en" => "Huai Thalaeng" ,"province_id" => "19" ],
            [ "id" => "231" ,"code" => "3017" ,"name_th" => "ชุมพวง" ,"name_en" => "Chum Phuang" ,"province_id" => "19" ],
            [ "id" => "232" ,"code" => "3018" ,"name_th" => "สูงเนิน" ,"name_en" => "Sung Noen" ,"province_id" => "19" ],
            [ "id" => "233" ,"code" => "3019" ,"name_th" => "ขามทะเลสอ" ,"name_en" => "Kham Thale So" ,"province_id" => "19" ],
            [ "id" => "234" ,"code" => "3020" ,"name_th" => "สีคิ้ว" ,"name_en" => "Sikhio" ,"province_id" => "19" ],
            [ "id" => "235" ,"code" => "3021" ,"name_th" => "ปากช่อง" ,"name_en" => "Pak Chong" ,"province_id" => "19" ],
            [ "id" => "236" ,"code" => "3022" ,"name_th" => "หนองบุญมาก" ,"name_en" => "Nong Bunnak" ,"province_id" => "19" ],
            [ "id" => "237" ,"code" => "3023" ,"name_th" => "แก้งสนามนาง" ,"name_en" => "Kaeng Sanam Nang" ,"province_id" => "19" ],
            [ "id" => "238" ,"code" => "3024" ,"name_th" => "โนนแดง" ,"name_en" => "Non Daeng" ,"province_id" => "19" ],
            [ "id" => "239" ,"code" => "3025" ,"name_th" => "วังน้ำเขียว" ,"name_en" => "Wang Nam Khiao" ,"province_id" => "19" ],
            [ "id" => "240" ,"code" => "3026" ,"name_th" => "เทพารักษ์" ,"name_en" => "Thepharak" ,"province_id" => "19" ],
            [ "id" => "241" ,"code" => "3027" ,"name_th" => "เมืองยาง" ,"name_en" => "Mueang Yang" ,"province_id" => "19" ],
            [ "id" => "242" ,"code" => "3028" ,"name_th" => "พระทองคำ" ,"name_en" => "Phra Thong Kham" ,"province_id" => "19" ],
            [ "id" => "243" ,"code" => "3029" ,"name_th" => "ลำทะเมนชัย" ,"name_en" => "Lam Thamenchai" ,"province_id" => "19" ],
            [ "id" => "244" ,"code" => "3030" ,"name_th" => "บัวลาย" ,"name_en" => "Bua Lai" ,"province_id" => "19" ],
            [ "id" => "245" ,"code" => "3031" ,"name_th" => "สีดา" ,"name_en" => "Sida" ,"province_id" => "19" ],
            [ "id" => "246" ,"code" => "3032" ,"name_th" => "เฉลิมพระเกียรติ" ,"name_en" => "Chaloem Phra Kiat" ,"province_id" => "19" ],
            [ "id" => "247" ,"code" => "3049" ,"name_th" => "ท้องถิ่นเทศบาลตำบลโพธิ์กลาง*" ,"name_en" => "Pho Krang" ,"province_id" => "19" ],
            [ "id" => "248" ,"code" => "3051" ,"name_th" => "สาขาตำบลมะค่า-พลสงคราม*" ,"name_en" => "Ma Ka-Pon Songkram*" ,"province_id" => "19" ],
            [ "id" => "249" ,"code" => "3081" ,"name_th" => "*โนนลาว" ,"name_en" => "*Non Lao" ,"province_id" => "19" ],
            [ "id" => "250" ,"code" => "3101" ,"name_th" => "เมืองบุรีรัมย์" ,"name_en" => "Mueang Buri Ram" ,"province_id" => "20" ],
            [ "id" => "251" ,"code" => "3102" ,"name_th" => "คูเมือง" ,"name_en" => "Khu Mueang" ,"province_id" => "20" ],
            [ "id" => "252" ,"code" => "3103" ,"name_th" => "กระสัง" ,"name_en" => "Krasang" ,"province_id" => "20" ],
            [ "id" => "253" ,"code" => "3104" ,"name_th" => "นางรอง" ,"name_en" => "Nang Rong" ,"province_id" => "20" ],
            [ "id" => "254" ,"code" => "3105" ,"name_th" => "หนองกี่" ,"name_en" => "Nong Ki" ,"province_id" => "20" ],
            [ "id" => "255" ,"code" => "3106" ,"name_th" => "ละหานทราย" ,"name_en" => "Lahan Sai" ,"province_id" => "20" ],
            [ "id" => "256" ,"code" => "3107" ,"name_th" => "ประโคนชัย" ,"name_en" => "Prakhon Chai" ,"province_id" => "20" ],
            [ "id" => "257" ,"code" => "3108" ,"name_th" => "บ้านกรวด" ,"name_en" => "Ban Kruat" ,"province_id" => "20" ],
            [ "id" => "258" ,"code" => "3109" ,"name_th" => "พุทไธสง" ,"name_en" => "Phutthaisong" ,"province_id" => "20" ],
            [ "id" => "259" ,"code" => "3110" ,"name_th" => "ลำปลายมาศ" ,"name_en" => "Lam Plai Mat" ,"province_id" => "20" ],
            [ "id" => "260" ,"code" => "3111" ,"name_th" => "สตึก" ,"name_en" => "Satuek" ,"province_id" => "20" ],
            [ "id" => "261" ,"code" => "3112" ,"name_th" => "ปะคำ" ,"name_en" => "Pakham" ,"province_id" => "20" ],
            [ "id" => "262" ,"code" => "3113" ,"name_th" => "นาโพธิ์" ,"name_en" => "Na Pho" ,"province_id" => "20" ],
            [ "id" => "263" ,"code" => "3114" ,"name_th" => "หนองหงส์" ,"name_en" => "Nong Hong" ,"province_id" => "20" ],
            [ "id" => "264" ,"code" => "3115" ,"name_th" => "พลับพลาชัย" ,"name_en" => "Phlapphla Chai" ,"province_id" => "20" ],
            [ "id" => "265" ,"code" => "3116" ,"name_th" => "ห้วยราช" ,"name_en" => "Huai Rat" ,"province_id" => "20" ],
            [ "id" => "266" ,"code" => "3117" ,"name_th" => "โนนสุวรรณ" ,"name_en" => "Non Suwan" ,"province_id" => "20" ],
            [ "id" => "267" ,"code" => "3118" ,"name_th" => "ชำนิ" ,"name_en" => "Chamni" ,"province_id" => "20" ],
            [ "id" => "268" ,"code" => "3119" ,"name_th" => "บ้านใหม่ไชยพจน์" ,"name_en" => "Ban Mai Chaiyaphot" ,"province_id" => "20" ],
            [ "id" => "269" ,"code" => "3120" ,"name_th" => "โนนดินแดง" ,"name_en" => "Din Daeng" ,"province_id" => "20" ],
            [ "id" => "270" ,"code" => "3121" ,"name_th" => "บ้านด่าน" ,"name_en" => "Ban Dan" ,"province_id" => "20" ],
            [ "id" => "271" ,"code" => "3122" ,"name_th" => "แคนดง" ,"name_en" => "Khaen Dong" ,"province_id" => "20" ],
            [ "id" => "272" ,"code" => "3123" ,"name_th" => "เฉลิมพระเกียรติ" ,"name_en" => "Chaloem Phra Kiat" ,"province_id" => "20" ],
            [ "id" => "273" ,"code" => "3201" ,"name_th" => "เมืองสุรินทร์" ,"name_en" => "Mueang Surin" ,"province_id" => "21" ],
            [ "id" => "274" ,"code" => "3202" ,"name_th" => "ชุมพลบุรี" ,"name_en" => "Chumphon Buri" ,"province_id" => "21" ],
            [ "id" => "275" ,"code" => "3203" ,"name_th" => "ท่าตูม" ,"name_en" => "Tha Tum" ,"province_id" => "21" ],
            [ "id" => "276" ,"code" => "3204" ,"name_th" => "จอมพระ" ,"name_en" => "Chom Phra" ,"province_id" => "21" ],
            [ "id" => "277" ,"code" => "3205" ,"name_th" => "ปราสาท" ,"name_en" => "Prasat" ,"province_id" => "21" ],
            [ "id" => "278" ,"code" => "3206" ,"name_th" => "กาบเชิง" ,"name_en" => "Kap Choeng" ,"province_id" => "21" ],
            [ "id" => "279" ,"code" => "3207" ,"name_th" => "รัตนบุรี" ,"name_en" => "Rattanaburi" ,"province_id" => "21" ],
            [ "id" => "280" ,"code" => "3208" ,"name_th" => "สนม" ,"name_en" => "Sanom" ,"province_id" => "21" ],
            [ "id" => "281" ,"code" => "3209" ,"name_th" => "ศีขรภูมิ" ,"name_en" => "Sikhoraphum" ,"province_id" => "21" ],
            [ "id" => "282" ,"code" => "3210" ,"name_th" => "สังขะ" ,"name_en" => "Sangkha" ,"province_id" => "21" ],
            [ "id" => "283" ,"code" => "3211" ,"name_th" => "ลำดวน" ,"name_en" => "Lamduan" ,"province_id" => "21" ],
            [ "id" => "284" ,"code" => "3212" ,"name_th" => "สำโรงทาบ" ,"name_en" => "Samrong Thap" ,"province_id" => "21" ],
            [ "id" => "285" ,"code" => "3213" ,"name_th" => "บัวเชด" ,"name_en" => "Buachet" ,"province_id" => "21" ],
            [ "id" => "286" ,"code" => "3214" ,"name_th" => "พนมดงรัก" ,"name_en" => "Phanom Dong Rak" ,"province_id" => "21" ],
            [ "id" => "287" ,"code" => "3215" ,"name_th" => "ศรีณรงค์" ,"name_en" => "Si Narong" ,"province_id" => "21" ],
            [ "id" => "288" ,"code" => "3216" ,"name_th" => "เขวาสินรินทร์" ,"name_en" => "Khwao Sinarin" ,"province_id" => "21" ],
            [ "id" => "289" ,"code" => "3217" ,"name_th" => "โนนนารายณ์" ,"name_en" => "Non Narai" ,"province_id" => "21" ],
            [ "id" => "290" ,"code" => "3301" ,"name_th" => "เมืองศรีสะเกษ" ,"name_en" => "Mueang Si Sa Ket" ,"province_id" => "22" ],
            [ "id" => "291" ,"code" => "3302" ,"name_th" => "ยางชุมน้อย" ,"name_en" => "Yang Chum Noi" ,"province_id" => "22" ],
            [ "id" => "292" ,"code" => "3303" ,"name_th" => "กันทรารมย์" ,"name_en" => "Kanthararom" ,"province_id" => "22" ],
            [ "id" => "293" ,"code" => "3304" ,"name_th" => "กันทรลักษ์" ,"name_en" => "Kantharalak" ,"province_id" => "22" ],
            [ "id" => "294" ,"code" => "3305" ,"name_th" => "ขุขันธ์" ,"name_en" => "Khukhan" ,"province_id" => "22" ],
            [ "id" => "295" ,"code" => "3306" ,"name_th" => "ไพรบึง" ,"name_en" => "Phrai Bueng" ,"province_id" => "22" ],
            [ "id" => "296" ,"code" => "3307" ,"name_th" => "ปรางค์กู่" ,"name_en" => "Prang Ku" ,"province_id" => "22" ],
            [ "id" => "297" ,"code" => "3308" ,"name_th" => "ขุนหาญ" ,"name_en" => "Khun Han" ,"province_id" => "22" ],
            [ "id" => "298" ,"code" => "3309" ,"name_th" => "ราษีไศล" ,"name_en" => "Rasi Salai" ,"province_id" => "22" ],
            [ "id" => "299" ,"code" => "3310" ,"name_th" => "อุทุมพรพิสัย" ,"name_en" => "Uthumphon Phisai" ,"province_id" => "22" ],
            [ "id" => "300" ,"code" => "3311" ,"name_th" => "บึงบูรพ์" ,"name_en" => "Bueng Bun" ,"province_id" => "22" ],
            [ "id" => "301" ,"code" => "3312" ,"name_th" => "ห้วยทับทัน" ,"name_en" => "Huai Thap Than" ,"province_id" => "22" ],
            [ "id" => "302" ,"code" => "3313" ,"name_th" => "โนนคูณ" ,"name_en" => "Non Khun" ,"province_id" => "22" ],
            [ "id" => "303" ,"code" => "3314" ,"name_th" => "ศรีรัตนะ" ,"name_en" => "Si Rattana" ,"province_id" => "22" ],
            [ "id" => "304" ,"code" => "3315" ,"name_th" => "น้ำเกลี้ยง" ,"name_en" => "Si Rattana" ,"province_id" => "22" ],
            [ "id" => "305" ,"code" => "3316" ,"name_th" => "วังหิน" ,"name_en" => "Wang Hin" ,"province_id" => "22" ],
            [ "id" => "306" ,"code" => "3317" ,"name_th" => "ภูสิงห์" ,"name_en" => "Phu Sing" ,"province_id" => "22" ],
            [ "id" => "307" ,"code" => "3318" ,"name_th" => "เมืองจันทร์" ,"name_en" => "Mueang Chan" ,"province_id" => "22" ],
            [ "id" => "308" ,"code" => "3319" ,"name_th" => "เบญจลักษ์" ,"name_en" => "Benchalak" ,"province_id" => "22" ],
            [ "id" => "309" ,"code" => "3320" ,"name_th" => "พยุห์" ,"name_en" => "Phayu" ,"province_id" => "22" ],
            [ "id" => "310" ,"code" => "3321" ,"name_th" => "โพธิ์ศรีสุวรรณ" ,"name_en" => "Pho Si Suwan" ,"province_id" => "22" ],
            [ "id" => "311" ,"code" => "3322" ,"name_th" => "ศิลาลาด" ,"name_en" => "Sila Lat" ,"province_id" => "22" ],
            [ "id" => "312" ,"code" => "3401" ,"name_th" => "เมืองอุบลราชธานี" ,"name_en" => "Mueang Ubon Ratchathani" ,"province_id" => "23" ],
            [ "id" => "313" ,"code" => "3402" ,"name_th" => "ศรีเมืองใหม่" ,"name_en" => "Si Mueang Mai" ,"province_id" => "23" ],
            [ "id" => "314" ,"code" => "3403" ,"name_th" => "โขงเจียม" ,"name_en" => "Khong Chiam" ,"province_id" => "23" ],
            [ "id" => "315" ,"code" => "3404" ,"name_th" => "เขื่องใน" ,"name_en" => "Khueang Nai" ,"province_id" => "23" ],
            [ "id" => "316" ,"code" => "3405" ,"name_th" => "เขมราฐ" ,"name_en" => "Khemarat" ,"province_id" => "23" ],
            [ "id" => "317" ,"code" => "3406" ,"name_th" => "*ชานุมาน" ,"name_en" => "*Shanuman" ,"province_id" => "23" ],
            [ "id" => "318" ,"code" => "3407" ,"name_th" => "เดชอุดม" ,"name_en" => "Det Udom" ,"province_id" => "23" ],
            [ "id" => "319" ,"code" => "3408" ,"name_th" => "นาจะหลวย" ,"name_en" => "Na Chaluai" ,"province_id" => "23" ],
            [ "id" => "320" ,"code" => "3409" ,"name_th" => "น้ำยืน" ,"name_en" => "Nam Yuen" ,"province_id" => "23" ],
            [ "id" => "321" ,"code" => "3410" ,"name_th" => "บุณฑริก" ,"name_en" => "Buntharik" ,"province_id" => "23" ],
            [ "id" => "322" ,"code" => "3411" ,"name_th" => "ตระการพืชผล" ,"name_en" => "Trakan Phuet Phon" ,"province_id" => "23" ],
            [ "id" => "323" ,"code" => "3412" ,"name_th" => "กุดข้าวปุ้น" ,"name_en" => "Kut Khaopun" ,"province_id" => "23" ],
            [ "id" => "324" ,"code" => "3413" ,"name_th" => "*พนา" ,"name_en" => "*Phana" ,"province_id" => "23" ],
            [ "id" => "325" ,"code" => "3414" ,"name_th" => "ม่วงสามสิบ" ,"name_en" => "Muang Sam Sip" ,"province_id" => "23" ],
            [ "id" => "326" ,"code" => "3415" ,"name_th" => "วารินชำราบ" ,"name_en" => "Warin Chamrap" ,"province_id" => "23" ],
            [ "id" => "327" ,"code" => "3416" ,"name_th" => "*อำนาจเจริญ" ,"name_en" => "*Amnat Charoen" ,"province_id" => "23" ],
            [ "id" => "328" ,"code" => "3417" ,"name_th" => "*เสนางคนิคม" ,"name_en" => "*Senangkhanikhom" ,"province_id" => "23" ],
            [ "id" => "329" ,"code" => "3418" ,"name_th" => "*หัวตะพาน" ,"name_en" => "*Hua Taphan" ,"province_id" => "23" ],
            [ "id" => "330" ,"code" => "3419" ,"name_th" => "พิบูลมังสาหาร" ,"name_en" => "Phibun Mangsahan" ,"province_id" => "23" ],
            [ "id" => "331" ,"code" => "3420" ,"name_th" => "ตาลสุม" ,"name_en" => "Tan Sum" ,"province_id" => "23" ],
            [ "id" => "332" ,"code" => "3421" ,"name_th" => "โพธิ์ไทร" ,"name_en" => "Pho Sai" ,"province_id" => "23" ],
            [ "id" => "333" ,"code" => "3422" ,"name_th" => "สำโรง" ,"name_en" => "Samrong" ,"province_id" => "23" ],
            [ "id" => "334" ,"code" => "3423" ,"name_th" => "*กิ่งอำเภอลืออำนาจ" ,"name_en" => "*King Amphoe Lue Amnat" ,"province_id" => "23" ],
            [ "id" => "335" ,"code" => "3424" ,"name_th" => "ดอนมดแดง" ,"name_en" => "Don Mot Daeng" ,"province_id" => "23" ],
            [ "id" => "336" ,"code" => "3425" ,"name_th" => "สิรินธร" ,"name_en" => "Sirindhorn" ,"province_id" => "23" ],
            [ "id" => "337" ,"code" => "3426" ,"name_th" => "ทุ่งศรีอุดม" ,"name_en" => "Thung Si Udom" ,"province_id" => "23" ],
            [ "id" => "338" ,"code" => "3427" ,"name_th" => "*ปทุมราชวงศา" ,"name_en" => "*Pathum Ratchawongsa" ,"province_id" => "23" ],
            [ "id" => "339" ,"code" => "3428" ,"name_th" => "*กิ่งอำเภอศรีหลักชัย" ,"name_en" => "*King Amphoe Sri Lunk Chai" ,"province_id" => "23" ],
            [ "id" => "340" ,"code" => "3429" ,"name_th" => "นาเยีย" ,"name_en" => "Na Yia" ,"province_id" => "23" ],
            [ "id" => "341" ,"code" => "3430" ,"name_th" => "นาตาล" ,"name_en" => "Na Tan" ,"province_id" => "23" ],
            [ "id" => "342" ,"code" => "3431" ,"name_th" => "เหล่าเสือโก้ก" ,"name_en" => "Lao Suea Kok" ,"province_id" => "23" ],
            [ "id" => "343" ,"code" => "3432" ,"name_th" => "สว่างวีระวงศ์" ,"name_en" => "Sawang Wirawong" ,"province_id" => "23" ],
            [ "id" => "344" ,"code" => "3433" ,"name_th" => "น้ำขุ่น" ,"name_en" => "Nam Khun" ,"province_id" => "23" ],
            [ "id" => "345" ,"code" => "3481" ,"name_th" => "*อ.สุวรรณวารี จ.อุบลราชธานี" ,"name_en" => "*Suwan Wari" ,"province_id" => "23" ],
            [ "id" => "346" ,"code" => "3501" ,"name_th" => "เมืองยโสธร" ,"name_en" => "Mueang Yasothon" ,"province_id" => "24" ],
            [ "id" => "347" ,"code" => "3502" ,"name_th" => "ทรายมูล" ,"name_en" => "Sai Mun" ,"province_id" => "24" ],
            [ "id" => "348" ,"code" => "3503" ,"name_th" => "กุดชุม" ,"name_en" => "Kut Chum" ,"province_id" => "24" ],
            [ "id" => "349" ,"code" => "3504" ,"name_th" => "คำเขื่อนแก้ว" ,"name_en" => "Kham Khuean Kaeo" ,"province_id" => "24" ],
            [ "id" => "350" ,"code" => "3505" ,"name_th" => "ป่าติ้ว" ,"name_en" => "Pa Tio" ,"province_id" => "24" ],
            [ "id" => "351" ,"code" => "3506" ,"name_th" => "มหาชนะชัย" ,"name_en" => "Maha Chana Chai" ,"province_id" => "24" ],
            [ "id" => "352" ,"code" => "3507" ,"name_th" => "ค้อวัง" ,"name_en" => "Kho Wang" ,"province_id" => "24" ],
            [ "id" => "353" ,"code" => "3508" ,"name_th" => "เลิงนกทา" ,"name_en" => "Loeng Nok Tha" ,"province_id" => "24" ],
            [ "id" => "354" ,"code" => "3509" ,"name_th" => "ไทยเจริญ" ,"name_en" => "Thai Charoen" ,"province_id" => "24" ],
            [ "id" => "355" ,"code" => "3601" ,"name_th" => "เมืองชัยภูมิ" ,"name_en" => "Mueang Chaiyaphum" ,"province_id" => "25" ],
            [ "id" => "356" ,"code" => "3602" ,"name_th" => "บ้านเขว้า" ,"name_en" => "Ban Khwao" ,"province_id" => "25" ],
            [ "id" => "357" ,"code" => "3603" ,"name_th" => "คอนสวรรค์" ,"name_en" => "Khon Sawan" ,"province_id" => "25" ],
            [ "id" => "358" ,"code" => "3604" ,"name_th" => "เกษตรสมบูรณ์" ,"name_en" => "Kaset Sombun" ,"province_id" => "25" ],
            [ "id" => "359" ,"code" => "3605" ,"name_th" => "หนองบัวแดง" ,"name_en" => "Nong Bua Daeng" ,"province_id" => "25" ],
            [ "id" => "360" ,"code" => "3606" ,"name_th" => "จัตุรัส" ,"name_en" => "Chatturat" ,"province_id" => "25" ],
            [ "id" => "361" ,"code" => "3607" ,"name_th" => "บำเหน็จณรงค์" ,"name_en" => "Bamnet Narong" ,"province_id" => "25" ],
            [ "id" => "362" ,"code" => "3608" ,"name_th" => "หนองบัวระเหว" ,"name_en" => "Nong Bua Rawe" ,"province_id" => "25" ],
            [ "id" => "363" ,"code" => "3609" ,"name_th" => "เทพสถิต" ,"name_en" => "Thep Sathit" ,"province_id" => "25" ],
            [ "id" => "364" ,"code" => "3610" ,"name_th" => "ภูเขียว" ,"name_en" => "Phu Khiao" ,"province_id" => "25" ],
            [ "id" => "365" ,"code" => "3611" ,"name_th" => "บ้านแท่น" ,"name_en" => "Ban Thaen" ,"province_id" => "25" ],
            [ "id" => "366" ,"code" => "3612" ,"name_th" => "แก้งคร้อ" ,"name_en" => "Kaeng Khro" ,"province_id" => "25" ],
            [ "id" => "367" ,"code" => "3613" ,"name_th" => "คอนสาร" ,"name_en" => "Khon San" ,"province_id" => "25" ],
            [ "id" => "368" ,"code" => "3614" ,"name_th" => "ภักดีชุมพล" ,"name_en" => "Phakdi Chumphon" ,"province_id" => "25" ],
            [ "id" => "369" ,"code" => "3615" ,"name_th" => "เนินสง่า" ,"name_en" => "Noen Sa-nga" ,"province_id" => "25" ],
            [ "id" => "370" ,"code" => "3616" ,"name_th" => "ซับใหญ่" ,"name_en" => "Sap Yai" ,"province_id" => "25" ],
            [ "id" => "371" ,"code" => "3651" ,"name_th" => "เมืองชัยภูมิ (สาขาตำบลโนนสำราญ)*" ,"name_en" => "Mueang Chaiyaphum(Non Sumran)*" ,"province_id" => "25" ],
            [ "id" => "372" ,"code" => "3652" ,"name_th" => "สาขาตำบลบ้านหว่าเฒ่า*" ,"name_en" => "Ban Wha Tao*" ,"province_id" => "25" ],
            [ "id" => "373" ,"code" => "3653" ,"name_th" => "หนองบัวแดง (สาขาตำบลวังชมภู)*" ,"name_en" => "Nong Bua Daeng" ,"province_id" => "25" ],
            [ "id" => "374" ,"code" => "3654" ,"name_th" => "กิ่งอำเภอซับใหญ่ (สาขาตำบลซับใหญ่)*" ,"name_en" => "King Amphoe Sap Yai*" ,"province_id" => "25" ],
            [ "id" => "375" ,"code" => "3655" ,"name_th" => "สาขาตำบลโคกเพชร*" ,"name_en" => "Coke Phet*" ,"province_id" => "25" ],
            [ "id" => "376" ,"code" => "3656" ,"name_th" => "เทพสถิต (สาขาตำบลนายางกลัก)*" ,"name_en" => "Thep Sathit*" ,"province_id" => "25" ],
            [ "id" => "377" ,"code" => "3657" ,"name_th" => "บ้านแท่น (สาขาตำบลบ้านเต่า)*" ,"name_en" => "Ban Thaen" ,"province_id" => "25" ],
            [ "id" => "378" ,"code" => "3658" ,"name_th" => "แก้งคร้อ (สาขาตำบลท่ามะไฟหวาน)*" ,"name_en" => "Kaeng Khro*" ,"province_id" => "25" ],
            [ "id" => "379" ,"code" => "3659" ,"name_th" => "คอนสาร (สาขาตำบลโนนคูณ)*" ,"name_en" => "Khon San*" ,"province_id" => "25" ],
            [ "id" => "380" ,"code" => "3701" ,"name_th" => "เมืองอำนาจเจริญ" ,"name_en" => "Mueang Amnat Charoen" ,"province_id" => "26" ],
            [ "id" => "381" ,"code" => "3702" ,"name_th" => "ชานุมาน" ,"name_en" => "Chanuman" ,"province_id" => "26" ],
            [ "id" => "382" ,"code" => "3703" ,"name_th" => "ปทุมราชวงศา" ,"name_en" => "Pathum Ratchawongsa" ,"province_id" => "26" ],
            [ "id" => "383" ,"code" => "3704" ,"name_th" => "พนา" ,"name_en" => "Phana" ,"province_id" => "26" ],
            [ "id" => "384" ,"code" => "3705" ,"name_th" => "เสนางคนิคม" ,"name_en" => "Senangkhanikhom" ,"province_id" => "26" ],
            [ "id" => "385" ,"code" => "3706" ,"name_th" => "หัวตะพาน" ,"name_en" => "Hua Taphan" ,"province_id" => "26" ],
            [ "id" => "386" ,"code" => "3707" ,"name_th" => "ลืออำนาจ" ,"name_en" => "Lue Amnat" ,"province_id" => "26" ],
            [ "id" => "387" ,"code" => "3901" ,"name_th" => "เมืองหนองบัวลำภู" ,"name_en" => "Mueang Nong Bua Lam Phu" ,"province_id" => "27" ],
            [ "id" => "388" ,"code" => "3902" ,"name_th" => "นากลาง" ,"name_en" => "Na Klang" ,"province_id" => "27" ],
            [ "id" => "389" ,"code" => "3903" ,"name_th" => "โนนสัง" ,"name_en" => "Non Sang" ,"province_id" => "27" ],
            [ "id" => "390" ,"code" => "3904" ,"name_th" => "ศรีบุญเรือง" ,"name_en" => "Si Bun Rueang" ,"province_id" => "27" ],
            [ "id" => "391" ,"code" => "3905" ,"name_th" => "สุวรรณคูหา" ,"name_en" => "Suwannakhuha" ,"province_id" => "27" ],
            [ "id" => "392" ,"code" => "3906" ,"name_th" => "นาวัง" ,"name_en" => "Na Wang" ,"province_id" => "27" ],
            [ "id" => "393" ,"code" => "4001" ,"name_th" => "เมืองขอนแก่น" ,"name_en" => "Mueang Khon Kaen" ,"province_id" => "28" ],
            [ "id" => "394" ,"code" => "4002" ,"name_th" => "บ้านฝาง" ,"name_en" => "Ban Fang" ,"province_id" => "28" ],
            [ "id" => "395" ,"code" => "4003" ,"name_th" => "พระยืน" ,"name_en" => "Phra Yuen" ,"province_id" => "28" ],
            [ "id" => "396" ,"code" => "4004" ,"name_th" => "หนองเรือ" ,"name_en" => "Nong Ruea" ,"province_id" => "28" ],
            [ "id" => "397" ,"code" => "4005" ,"name_th" => "ชุมแพ" ,"name_en" => "Chum Phae" ,"province_id" => "28" ],
            [ "id" => "398" ,"code" => "4006" ,"name_th" => "สีชมพู" ,"name_en" => "Si Chomphu" ,"province_id" => "28" ],
            [ "id" => "399" ,"code" => "4007" ,"name_th" => "น้ำพอง" ,"name_en" => "Nam Phong" ,"province_id" => "28" ],
            [ "id" => "400" ,"code" => "4008" ,"name_th" => "อุบลรัตน์" ,"name_en" => "Ubolratana" ,"province_id" => "28" ],
            [ "id" => "401" ,"code" => "4009" ,"name_th" => "กระนวน" ,"name_en" => "Kranuan" ,"province_id" => "28" ],
            [ "id" => "402" ,"code" => "4010" ,"name_th" => "บ้านไผ่" ,"name_en" => "Ban Phai" ,"province_id" => "28" ],
            [ "id" => "403" ,"code" => "4011" ,"name_th" => "เปือยน้อย" ,"name_en" => "Pueai Noi" ,"province_id" => "28" ],
            [ "id" => "404" ,"code" => "4012" ,"name_th" => "พล" ,"name_en" => "Phon" ,"province_id" => "28" ],
            [ "id" => "405" ,"code" => "4013" ,"name_th" => "แวงใหญ่" ,"name_en" => "Waeng Yai" ,"province_id" => "28" ],
            [ "id" => "406" ,"code" => "4014" ,"name_th" => "แวงน้อย" ,"name_en" => "Waeng Noi" ,"province_id" => "28" ],
            [ "id" => "407" ,"code" => "4015" ,"name_th" => "หนองสองห้อง" ,"name_en" => "Nong Song Hong" ,"province_id" => "28" ],
            [ "id" => "408" ,"code" => "4016" ,"name_th" => "ภูเวียง" ,"name_en" => "Phu Wiang" ,"province_id" => "28" ],
            [ "id" => "409" ,"code" => "4017" ,"name_th" => "มัญจาคีรี" ,"name_en" => "Mancha Khiri" ,"province_id" => "28" ],
            [ "id" => "410" ,"code" => "4018" ,"name_th" => "ชนบท" ,"name_en" => "Chonnabot" ,"province_id" => "28" ],
            [ "id" => "411" ,"code" => "4019" ,"name_th" => "เขาสวนกวาง" ,"name_en" => "Khao Suan Kwang" ,"province_id" => "28" ],
            [ "id" => "412" ,"code" => "4020" ,"name_th" => "ภูผาม่าน" ,"name_en" => "Phu Pha Man" ,"province_id" => "28" ],
            [ "id" => "413" ,"code" => "4021" ,"name_th" => "ซำสูง" ,"name_en" => "Sam Sung" ,"province_id" => "28" ],
            [ "id" => "414" ,"code" => "4022" ,"name_th" => "โคกโพธิ์ไชย" ,"name_en" => "Khok Pho Chai" ,"province_id" => "28" ],
            [ "id" => "415" ,"code" => "4023" ,"name_th" => "หนองนาคำ" ,"name_en" => "Nong Na Kham" ,"province_id" => "28" ],
            [ "id" => "416" ,"code" => "4024" ,"name_th" => "บ้านแฮด" ,"name_en" => "Ban Haet" ,"province_id" => "28" ],
            [ "id" => "417" ,"code" => "4025" ,"name_th" => "โนนศิลา" ,"name_en" => "Non Sila" ,"province_id" => "28" ],
            [ "id" => "418" ,"code" => "4029" ,"name_th" => "เวียงเก่า" ,"name_en" => "Wiang Kao" ,"province_id" => "28" ],
            [ "id" => "419" ,"code" => "4068" ,"name_th" => "ท้องถิ่นเทศบาลตำบลบ้านเป็ด*" ,"name_en" => "Ban Pet*" ,"province_id" => "28" ],
            [ "id" => "420" ,"code" => "4098" ,"name_th" => "เทศบาลตำบลเมืองพล*" ,"name_en" => "Tet Saban Tambon Muang Phon*" ,"province_id" => "28" ],
            [ "id" => "421" ,"code" => "4101" ,"name_th" => "เมืองอุดรธานี" ,"name_en" => "Mueang Udon Thani" ,"province_id" => "29" ],
            [ "id" => "422" ,"code" => "4102" ,"name_th" => "กุดจับ" ,"name_en" => "Kut Chap" ,"province_id" => "29" ],
            [ "id" => "423" ,"code" => "4103" ,"name_th" => "หนองวัวซอ" ,"name_en" => "Nong Wua So" ,"province_id" => "29" ],
            [ "id" => "424" ,"code" => "4104" ,"name_th" => "กุมภวาปี" ,"name_en" => "Kumphawapi" ,"province_id" => "29" ],
            [ "id" => "425" ,"code" => "4105" ,"name_th" => "โนนสะอาด" ,"name_en" => "Non Sa-at" ,"province_id" => "29" ],
            [ "id" => "426" ,"code" => "4106" ,"name_th" => "หนองหาน" ,"name_en" => "Nong Han" ,"province_id" => "29" ],
            [ "id" => "427" ,"code" => "4107" ,"name_th" => "ทุ่งฝน" ,"name_en" => "Thung Fon" ,"province_id" => "29" ],
            [ "id" => "428" ,"code" => "4108" ,"name_th" => "ไชยวาน" ,"name_en" => "Chai Wan" ,"province_id" => "29" ],
            [ "id" => "429" ,"code" => "4109" ,"name_th" => "ศรีธาตุ" ,"name_en" => "Si That" ,"province_id" => "29" ],
            [ "id" => "430" ,"code" => "4110" ,"name_th" => "วังสามหมอ" ,"name_en" => "Wang Sam Mo" ,"province_id" => "29" ],
            [ "id" => "431" ,"code" => "4111" ,"name_th" => "บ้านดุง" ,"name_en" => "Ban Dung" ,"province_id" => "29" ],
            [ "id" => "432" ,"code" => "4112" ,"name_th" => "*หนองบัวลำภู" ,"name_en" => "*Nong Bua Lam Phu" ,"province_id" => "29" ],
            [ "id" => "433" ,"code" => "4113" ,"name_th" => "*ศรีบุญเรือง" ,"name_en" => "*Si Bun Rueang" ,"province_id" => "29" ],
            [ "id" => "434" ,"code" => "4114" ,"name_th" => "*นากลาง" ,"name_en" => "*Na Klang" ,"province_id" => "29" ],
            [ "id" => "435" ,"code" => "4115" ,"name_th" => "*สุวรรณคูหา" ,"name_en" => "*Suwannakhuha" ,"province_id" => "29" ],
            [ "id" => "436" ,"code" => "4116" ,"name_th" => "*โนนสัง" ,"name_en" => "*Non Sang" ,"province_id" => "29" ],
            [ "id" => "437" ,"code" => "4117" ,"name_th" => "บ้านผือ" ,"name_en" => "Ban Phue" ,"province_id" => "29" ],
            [ "id" => "438" ,"code" => "4118" ,"name_th" => "น้ำโสม" ,"name_en" => "Nam Som" ,"province_id" => "29" ],
            [ "id" => "439" ,"code" => "4119" ,"name_th" => "เพ็ญ" ,"name_en" => "Phen" ,"province_id" => "29" ],
            [ "id" => "440" ,"code" => "4120" ,"name_th" => "สร้างคอม" ,"name_en" => "Sang Khom" ,"province_id" => "29" ],
            [ "id" => "441" ,"code" => "4121" ,"name_th" => "หนองแสง" ,"name_en" => "Nong Saeng" ,"province_id" => "29" ],
            [ "id" => "442" ,"code" => "4122" ,"name_th" => "นายูง" ,"name_en" => "Na Yung" ,"province_id" => "29" ],
            [ "id" => "443" ,"code" => "4123" ,"name_th" => "พิบูลย์รักษ์" ,"name_en" => "Phibun Rak" ,"province_id" => "29" ],
            [ "id" => "444" ,"code" => "4124" ,"name_th" => "กู่แก้ว" ,"name_en" => "Ku Kaeo" ,"province_id" => "29" ],
            [ "id" => "445" ,"code" => "4125" ,"name_th" => "ประจักษ์ศิลปาคม" ,"name_en" => "rachak-sinlapakhom" ,"province_id" => "29" ],
            [ "id" => "446" ,"code" => "4201" ,"name_th" => "เมืองเลย" ,"name_en" => "Mueang Loei" ,"province_id" => "30" ],
            [ "id" => "447" ,"code" => "4202" ,"name_th" => "นาด้วง" ,"name_en" => "Na Duang" ,"province_id" => "30" ],
            [ "id" => "448" ,"code" => "4203" ,"name_th" => "เชียงคาน" ,"name_en" => "Chiang Khan" ,"province_id" => "30" ],
            [ "id" => "449" ,"code" => "4204" ,"name_th" => "ปากชม" ,"name_en" => "Pak Chom" ,"province_id" => "30" ],
            [ "id" => "450" ,"code" => "4205" ,"name_th" => "ด่านซ้าย" ,"name_en" => "Dan Sai" ,"province_id" => "30" ],
            [ "id" => "451" ,"code" => "4206" ,"name_th" => "นาแห้ว" ,"name_en" => "Na Haeo" ,"province_id" => "30" ],
            [ "id" => "452" ,"code" => "4207" ,"name_th" => "ภูเรือ" ,"name_en" => "Phu Ruea" ,"province_id" => "30" ],
            [ "id" => "453" ,"code" => "4208" ,"name_th" => "ท่าลี่" ,"name_en" => "Tha Li" ,"province_id" => "30" ],
            [ "id" => "454" ,"code" => "4209" ,"name_th" => "วังสะพุง" ,"name_en" => "Wang Saphung" ,"province_id" => "30" ],
            [ "id" => "455" ,"code" => "4210" ,"name_th" => "ภูกระดึง" ,"name_en" => "Phu Kradueng" ,"province_id" => "30" ],
            [ "id" => "456" ,"code" => "4211" ,"name_th" => "ภูหลวง" ,"name_en" => "Phu Luang" ,"province_id" => "30" ],
            [ "id" => "457" ,"code" => "4212" ,"name_th" => "ผาขาว" ,"name_en" => "Pha Khao" ,"province_id" => "30" ],
            [ "id" => "458" ,"code" => "4213" ,"name_th" => "เอราวัณ" ,"name_en" => "Erawan" ,"province_id" => "30" ],
            [ "id" => "459" ,"code" => "4214" ,"name_th" => "หนองหิน" ,"name_en" => "Nong Hin" ,"province_id" => "30" ],
            [ "id" => "460" ,"code" => "4301" ,"name_th" => "เมืองหนองคาย" ,"name_en" => "Mueang Nong Khai" ,"province_id" => "31" ],
            [ "id" => "461" ,"code" => "4302" ,"name_th" => "ท่าบ่อ" ,"name_en" => "Tha Bo" ,"province_id" => "31" ],
            [ "id" => "464" ,"code" => "4305" ,"name_th" => "โพนพิสัย" ,"name_en" => "Phon Phisai" ,"province_id" => "31" ],
            [ "id" => "466" ,"code" => "4307" ,"name_th" => "ศรีเชียงใหม่" ,"name_en" => "Si Chiang Mai" ,"province_id" => "31" ],
            [ "id" => "467" ,"code" => "4308" ,"name_th" => "สังคม" ,"name_en" => "Sangkhom" ,"province_id" => "31" ],
            [ "id" => "473" ,"code" => "4314" ,"name_th" => "สระใคร" ,"name_en" => "Sakhrai" ,"province_id" => "31" ],
            [ "id" => "474" ,"code" => "4315" ,"name_th" => "เฝ้าไร่" ,"name_en" => "Fao Rai" ,"province_id" => "31" ],
            [ "id" => "475" ,"code" => "4316" ,"name_th" => "รัตนวาปี" ,"name_en" => "Rattanawapi" ,"province_id" => "31" ],
            [ "id" => "476" ,"code" => "4317" ,"name_th" => "โพธิ์ตาก" ,"name_en" => "Pho Tak" ,"province_id" => "31" ],
            [ "id" => "477" ,"code" => "4401" ,"name_th" => "เมืองมหาสารคาม" ,"name_en" => "Mueang Maha Sarakham" ,"province_id" => "32" ],
            [ "id" => "478" ,"code" => "4402" ,"name_th" => "แกดำ" ,"name_en" => "Kae Dam" ,"province_id" => "32" ],
            [ "id" => "479" ,"code" => "4403" ,"name_th" => "โกสุมพิสัย" ,"name_en" => "Kosum Phisai" ,"province_id" => "32" ],
            [ "id" => "480" ,"code" => "4404" ,"name_th" => "กันทรวิชัย" ,"name_en" => "Kantharawichai" ,"province_id" => "32" ],
            [ "id" => "481" ,"code" => "4405" ,"name_th" => "เชียงยืน" ,"name_en" => "Kantharawichai" ,"province_id" => "32" ],
            [ "id" => "482" ,"code" => "4406" ,"name_th" => "บรบือ" ,"name_en" => "Borabue" ,"province_id" => "32" ],
            [ "id" => "483" ,"code" => "4407" ,"name_th" => "นาเชือก" ,"name_en" => "Na Chueak" ,"province_id" => "32" ],
            [ "id" => "484" ,"code" => "4408" ,"name_th" => "พยัคฆภูมิพิสัย" ,"name_en" => "Phayakkhaphum Phisai" ,"province_id" => "32" ],
            [ "id" => "485" ,"code" => "4409" ,"name_th" => "วาปีปทุม" ,"name_en" => "Wapi Pathum" ,"province_id" => "32" ],
            [ "id" => "486" ,"code" => "4410" ,"name_th" => "นาดูน" ,"name_en" => "Na Dun" ,"province_id" => "32" ],
            [ "id" => "487" ,"code" => "4411" ,"name_th" => "ยางสีสุราช" ,"name_en" => "Yang Sisurat" ,"province_id" => "32" ],
            [ "id" => "488" ,"code" => "4412" ,"name_th" => "กุดรัง" ,"name_en" => "Kut Rang" ,"province_id" => "32" ],
            [ "id" => "489" ,"code" => "4413" ,"name_th" => "ชื่นชม" ,"name_en" => "Chuen Chom" ,"province_id" => "32" ],
            [ "id" => "490" ,"code" => "4481" ,"name_th" => "*หลุบ" ,"name_en" => "*Lub" ,"province_id" => "32" ],
            [ "id" => "491" ,"code" => "4501" ,"name_th" => "เมืองร้อยเอ็ด" ,"name_en" => "Mueang Roi Et" ,"province_id" => "33" ],
            [ "id" => "492" ,"code" => "4502" ,"name_th" => "เกษตรวิสัย" ,"name_en" => "Kaset Wisai" ,"province_id" => "33" ],
            [ "id" => "493" ,"code" => "4503" ,"name_th" => "ปทุมรัตต์" ,"name_en" => "Pathum Rat" ,"province_id" => "33" ],
            [ "id" => "494" ,"code" => "4504" ,"name_th" => "จตุรพักตรพิมาน" ,"name_en" => "Chaturaphak Phiman" ,"province_id" => "33" ],
            [ "id" => "495" ,"code" => "4505" ,"name_th" => "ธวัชบุรี" ,"name_en" => "Thawat Buri" ,"province_id" => "33" ],
            [ "id" => "496" ,"code" => "4506" ,"name_th" => "พนมไพร" ,"name_en" => "Phanom Phrai" ,"province_id" => "33" ],
            [ "id" => "497" ,"code" => "4507" ,"name_th" => "โพนทอง" ,"name_en" => "Phon Thong" ,"province_id" => "33" ],
            [ "id" => "498" ,"code" => "4508" ,"name_th" => "โพธิ์ชัย" ,"name_en" => "Pho Chai" ,"province_id" => "33" ],
            [ "id" => "499" ,"code" => "4509" ,"name_th" => "หนองพอก" ,"name_en" => "Nong Phok" ,"province_id" => "33" ],
            [ "id" => "500" ,"code" => "4510" ,"name_th" => "เสลภูมิ" ,"name_en" => "Selaphum" ,"province_id" => "33" ],
            [ "id" => "501" ,"code" => "4511" ,"name_th" => "สุวรรณภูมิ" ,"name_en" => "Suwannaphum" ,"province_id" => "33" ],
            [ "id" => "502" ,"code" => "4512" ,"name_th" => "เมืองสรวง" ,"name_en" => "Mueang Suang" ,"province_id" => "33" ],
            [ "id" => "503" ,"code" => "4513" ,"name_th" => "โพนทราย" ,"name_en" => "Phon Sai" ,"province_id" => "33" ],
            [ "id" => "504" ,"code" => "4514" ,"name_th" => "อาจสามารถ" ,"name_en" => "At Samat" ,"province_id" => "33" ],
            [ "id" => "505" ,"code" => "4515" ,"name_th" => "เมยวดี" ,"name_en" => "Moei Wadi" ,"province_id" => "33" ],
            [ "id" => "506" ,"code" => "4516" ,"name_th" => "ศรีสมเด็จ" ,"name_en" => "Si Somdet" ,"province_id" => "33" ],
            [ "id" => "507" ,"code" => "4517" ,"name_th" => "จังหาร" ,"name_en" => "Changhan" ,"province_id" => "33" ],
            [ "id" => "508" ,"code" => "4518" ,"name_th" => "เชียงขวัญ" ,"name_en" => "Chiang Khwan" ,"province_id" => "33" ],
            [ "id" => "509" ,"code" => "4519" ,"name_th" => "หนองฮี" ,"name_en" => "Nong Hi" ,"province_id" => "33" ],
            [ "id" => "510" ,"code" => "4520" ,"name_th" => "ทุ่งเขาหลวง" ,"name_en" => "Thung Khao Luangกิ่" ,"province_id" => "33" ],
            [ "id" => "511" ,"code" => "4601" ,"name_th" => "เมืองกาฬสินธุ์" ,"name_en" => "Mueang Kalasin" ,"province_id" => "34" ],
            [ "id" => "512" ,"code" => "4602" ,"name_th" => "นามน" ,"name_en" => "Na Mon" ,"province_id" => "34" ],
            [ "id" => "513" ,"code" => "4603" ,"name_th" => "กมลาไสย" ,"name_en" => "Kamalasai" ,"province_id" => "34" ],
            [ "id" => "514" ,"code" => "4604" ,"name_th" => "ร่องคำ" ,"name_en" => "Rong Kham" ,"province_id" => "34" ],
            [ "id" => "515" ,"code" => "4605" ,"name_th" => "กุฉินารายณ์" ,"name_en" => "Kuchinarai" ,"province_id" => "34" ],
            [ "id" => "516" ,"code" => "4606" ,"name_th" => "เขาวง" ,"name_en" => "Khao Wong" ,"province_id" => "34" ],
            [ "id" => "517" ,"code" => "4607" ,"name_th" => "ยางตลาด" ,"name_en" => "Yang Talat" ,"province_id" => "34" ],
            [ "id" => "518" ,"code" => "4608" ,"name_th" => "ห้วยเม็ก" ,"name_en" => "Huai Mek" ,"province_id" => "34" ],
            [ "id" => "519" ,"code" => "4609" ,"name_th" => "สหัสขันธ์" ,"name_en" => "Sahatsakhan" ,"province_id" => "34" ],
            [ "id" => "520" ,"code" => "4610" ,"name_th" => "คำม่วง" ,"name_en" => "Kham Muang" ,"province_id" => "34" ],
            [ "id" => "521" ,"code" => "4611" ,"name_th" => "ท่าคันโท" ,"name_en" => "Tha Khantho" ,"province_id" => "34" ],
            [ "id" => "522" ,"code" => "4612" ,"name_th" => "หนองกุงศรี" ,"name_en" => "Nong Kung Si" ,"province_id" => "34" ],
            [ "id" => "523" ,"code" => "4613" ,"name_th" => "สมเด็จ" ,"name_en" => "Somdet" ,"province_id" => "34" ],
            [ "id" => "524" ,"code" => "4614" ,"name_th" => "ห้วยผึ้ง" ,"name_en" => "Huai Phueng" ,"province_id" => "34" ],
            [ "id" => "525" ,"code" => "4615" ,"name_th" => "สามชัย" ,"name_en" => "Sam Chai" ,"province_id" => "34" ],
            [ "id" => "526" ,"code" => "4616" ,"name_th" => "นาคู" ,"name_en" => "Na Khu" ,"province_id" => "34" ],
            [ "id" => "527" ,"code" => "4617" ,"name_th" => "ดอนจาน" ,"name_en" => "Don Chan" ,"province_id" => "34" ],
            [ "id" => "528" ,"code" => "4618" ,"name_th" => "ฆ้องชัย" ,"name_en" => "Khong Chai" ,"province_id" => "34" ],
            [ "id" => "529" ,"code" => "4701" ,"name_th" => "เมืองสกลนคร" ,"name_en" => "Mueang Sakon Nakhon" ,"province_id" => "35" ],
            [ "id" => "530" ,"code" => "4702" ,"name_th" => "กุสุมาลย์" ,"name_en" => "Kusuman" ,"province_id" => "35" ],
            [ "id" => "531" ,"code" => "4703" ,"name_th" => "กุดบาก" ,"name_en" => "Kut Bak" ,"province_id" => "35" ],
            [ "id" => "532" ,"code" => "4704" ,"name_th" => "พรรณานิคม" ,"name_en" => "Phanna Nikhom" ,"province_id" => "35" ],
            [ "id" => "533" ,"code" => "4705" ,"name_th" => "พังโคน" ,"name_en" => "Phang Khon" ,"province_id" => "35" ],
            [ "id" => "534" ,"code" => "4706" ,"name_th" => "วาริชภูมิ" ,"name_en" => "Waritchaphum" ,"province_id" => "35" ],
            [ "id" => "535" ,"code" => "4707" ,"name_th" => "นิคมน้ำอูน" ,"name_en" => "Nikhom Nam Un" ,"province_id" => "35" ],
            [ "id" => "536" ,"code" => "4708" ,"name_th" => "วานรนิวาส" ,"name_en" => "Wanon Niwat" ,"province_id" => "35" ],
            [ "id" => "537" ,"code" => "4709" ,"name_th" => "คำตากล้า" ,"name_en" => "Kham Ta Kla" ,"province_id" => "35" ],
            [ "id" => "538" ,"code" => "4710" ,"name_th" => "บ้านม่วง" ,"name_en" => "Ban Muang" ,"province_id" => "35" ],
            [ "id" => "539" ,"code" => "4711" ,"name_th" => "อากาศอำนวย" ,"name_en" => "Akat Amnuai" ,"province_id" => "35" ],
            [ "id" => "540" ,"code" => "4712" ,"name_th" => "สว่างแดนดิน" ,"name_en" => "Sawang Daen Din" ,"province_id" => "35" ],
            [ "id" => "541" ,"code" => "4713" ,"name_th" => "ส่องดาว" ,"name_en" => "Song Dao" ,"province_id" => "35" ],
            [ "id" => "542" ,"code" => "4714" ,"name_th" => "เต่างอย" ,"name_en" => "Tao Ngoi" ,"province_id" => "35" ],
            [ "id" => "543" ,"code" => "4715" ,"name_th" => "โคกศรีสุพรรณ" ,"name_en" => "Khok Si Suphan" ,"province_id" => "35" ],
            [ "id" => "544" ,"code" => "4716" ,"name_th" => "เจริญศิลป์" ,"name_en" => "Charoen Sin" ,"province_id" => "35" ],
            [ "id" => "545" ,"code" => "4717" ,"name_th" => "โพนนาแก้ว" ,"name_en" => "Phon Na Kaeo" ,"province_id" => "35" ],
            [ "id" => "546" ,"code" => "4718" ,"name_th" => "ภูพาน" ,"name_en" => "Phu Phan" ,"province_id" => "35" ],
            [ "id" => "547" ,"code" => "4751" ,"name_th" => "วานรนิวาส (สาขาตำบลกุดเรือคำ)*" ,"name_en" => "Wanon Niwat" ,"province_id" => "35" ],
            [ "id" => "548" ,"code" => "4781" ,"name_th" => "*อ.บ้านหัน จ.สกลนคร" ,"name_en" => "*Banhan" ,"province_id" => "35" ],
            [ "id" => "549" ,"code" => "4801" ,"name_th" => "เมืองนครพนม" ,"name_en" => "Mueang Nakhon Phanom" ,"province_id" => "36" ],
            [ "id" => "550" ,"code" => "4802" ,"name_th" => "ปลาปาก" ,"name_en" => "Pla Pak" ,"province_id" => "36" ],
            [ "id" => "551" ,"code" => "4803" ,"name_th" => "ท่าอุเทน" ,"name_en" => "Tha Uthen" ,"province_id" => "36" ],
            [ "id" => "552" ,"code" => "4804" ,"name_th" => "บ้านแพง" ,"name_en" => "Ban Phaeng" ,"province_id" => "36" ],
            [ "id" => "553" ,"code" => "4805" ,"name_th" => "ธาตุพนม" ,"name_en" => "That Phanom" ,"province_id" => "36" ],
            [ "id" => "554" ,"code" => "4806" ,"name_th" => "เรณูนคร" ,"name_en" => "Renu Nakhon" ,"province_id" => "36" ],
            [ "id" => "555" ,"code" => "4807" ,"name_th" => "นาแก" ,"name_en" => "Na Kae" ,"province_id" => "36" ],
            [ "id" => "556" ,"code" => "4808" ,"name_th" => "ศรีสงคราม" ,"name_en" => "Si Songkhram" ,"province_id" => "36" ],
            [ "id" => "557" ,"code" => "4809" ,"name_th" => "นาหว้า" ,"name_en" => "Na Wa" ,"province_id" => "36" ],
            [ "id" => "558" ,"code" => "4810" ,"name_th" => "โพนสวรรค์" ,"name_en" => "Phon Sawan" ,"province_id" => "36" ],
            [ "id" => "559" ,"code" => "4811" ,"name_th" => "นาทม" ,"name_en" => "Na Thom" ,"province_id" => "36" ],
            [ "id" => "560" ,"code" => "4812" ,"name_th" => "วังยาง" ,"name_en" => "Wang Yang" ,"province_id" => "36" ],
            [ "id" => "561" ,"code" => "4901" ,"name_th" => "เมืองมุกดาหาร" ,"name_en" => "Mueang Mukdahan" ,"province_id" => "37" ],
            [ "id" => "562" ,"code" => "4902" ,"name_th" => "นิคมคำสร้อย" ,"name_en" => "Nikhom Kham Soi" ,"province_id" => "37" ],
            [ "id" => "563" ,"code" => "4903" ,"name_th" => "ดอนตาล" ,"name_en" => "Don Tan" ,"province_id" => "37" ],
            [ "id" => "564" ,"code" => "4904" ,"name_th" => "ดงหลวง" ,"name_en" => "Dong Luang" ,"province_id" => "37" ],
            [ "id" => "565" ,"code" => "4905" ,"name_th" => "คำชะอี" ,"name_en" => "Khamcha-i" ,"province_id" => "37" ],
            [ "id" => "566" ,"code" => "4906" ,"name_th" => "หว้านใหญ่" ,"name_en" => "Wan Yai" ,"province_id" => "37" ],
            [ "id" => "567" ,"code" => "4907" ,"name_th" => "หนองสูง" ,"name_en" => "Nong Sung" ,"province_id" => "37" ],
            [ "id" => "568" ,"code" => "5001" ,"name_th" => "เมืองเชียงใหม่" ,"name_en" => "Mueang Chiang Mai" ,"province_id" => "38" ],
            [ "id" => "569" ,"code" => "5002" ,"name_th" => "จอมทอง" ,"name_en" => "Chom Thong" ,"province_id" => "38" ],
            [ "id" => "570" ,"code" => "5003" ,"name_th" => "แม่แจ่ม" ,"name_en" => "Mae Chaem" ,"province_id" => "38" ],
            [ "id" => "571" ,"code" => "5004" ,"name_th" => "เชียงดาว" ,"name_en" => "Chiang Dao" ,"province_id" => "38" ],
            [ "id" => "572" ,"code" => "5005" ,"name_th" => "ดอยสะเก็ด" ,"name_en" => "Doi Saket" ,"province_id" => "38" ],
            [ "id" => "573" ,"code" => "5006" ,"name_th" => "แม่แตง" ,"name_en" => "Mae Taeng" ,"province_id" => "38" ],
            [ "id" => "574" ,"code" => "5007" ,"name_th" => "แม่ริม" ,"name_en" => "Mae Rim" ,"province_id" => "38" ],
            [ "id" => "575" ,"code" => "5008" ,"name_th" => "สะเมิง" ,"name_en" => "Samoeng" ,"province_id" => "38" ],
            [ "id" => "576" ,"code" => "5009" ,"name_th" => "ฝาง" ,"name_en" => "Fang" ,"province_id" => "38" ],
            [ "id" => "577" ,"code" => "5010" ,"name_th" => "แม่อาย" ,"name_en" => "Mae Ai" ,"province_id" => "38" ],
            [ "id" => "578" ,"code" => "5011" ,"name_th" => "พร้าว" ,"name_en" => "Phrao" ,"province_id" => "38" ],
            [ "id" => "579" ,"code" => "5012" ,"name_th" => "สันป่าตอง" ,"name_en" => "San Pa Tong" ,"province_id" => "38" ],
            [ "id" => "580" ,"code" => "5013" ,"name_th" => "สันกำแพง" ,"name_en" => "San Kamphaeng" ,"province_id" => "38" ],
            [ "id" => "581" ,"code" => "5014" ,"name_th" => "สันทราย" ,"name_en" => "San Sai" ,"province_id" => "38" ],
            [ "id" => "582" ,"code" => "5015" ,"name_th" => "หางดง" ,"name_en" => "Hang Dong" ,"province_id" => "38" ],
            [ "id" => "583" ,"code" => "5016" ,"name_th" => "ฮอด" ,"name_en" => "Hot" ,"province_id" => "38" ],
            [ "id" => "584" ,"code" => "5017" ,"name_th" => "ดอยเต่า" ,"name_en" => "Doi Tao" ,"province_id" => "38" ],
            [ "id" => "585" ,"code" => "5018" ,"name_th" => "อมก๋อย" ,"name_en" => "Omkoi" ,"province_id" => "38" ],
            [ "id" => "586" ,"code" => "5019" ,"name_th" => "สารภี" ,"name_en" => "Saraphi" ,"province_id" => "38" ],
            [ "id" => "587" ,"code" => "5020" ,"name_th" => "เวียงแหง" ,"name_en" => "Wiang Haeng" ,"province_id" => "38" ],
            [ "id" => "588" ,"code" => "5021" ,"name_th" => "ไชยปราการ" ,"name_en" => "Chai Prakan" ,"province_id" => "38" ],
            [ "id" => "589" ,"code" => "5022" ,"name_th" => "แม่วาง" ,"name_en" => "Mae Wang" ,"province_id" => "38" ],
            [ "id" => "590" ,"code" => "5023" ,"name_th" => "แม่ออน" ,"name_en" => "Mae On" ,"province_id" => "38" ],
            [ "id" => "591" ,"code" => "5024" ,"name_th" => "ดอยหล่อ" ,"name_en" => "Doi Lo" ,"province_id" => "38" ],
            [ "id" => "592" ,"code" => "5051" ,"name_th" => "เทศบาลนครเชียงใหม่ (สาขาแขวงกาลวิละ)*" ,"name_en" => "Tet Saban Nakorn Chiangmai(Kan lawi la)*" ,"province_id" => "38" ],
            [ "id" => "593" ,"code" => "5052" ,"name_th" => "เทศบาลนครเชียงใหม่ (สาขาแขวงศรีวิชั)*" ,"name_en" => "Tet Saban Nakorn Chiangmai(Sri Wi)*" ,"province_id" => "38" ],
            [ "id" => "594" ,"code" => "5053" ,"name_th" => "เทศบาลนครเชียงใหม่ (สาขาเม็งราย)*" ,"name_en" => "Tet Saban Nakorn Chiangmai(Meng Rai)*" ,"province_id" => "38" ],
            [ "id" => "595" ,"code" => "5101" ,"name_th" => "เมืองลำพูน" ,"name_en" => "Mueang Lamphun" ,"province_id" => "39" ],
            [ "id" => "596" ,"code" => "5102" ,"name_th" => "แม่ทา" ,"name_en" => "Mae Tha" ,"province_id" => "39" ],
            [ "id" => "597" ,"code" => "5103" ,"name_th" => "บ้านโฮ่ง" ,"name_en" => "Ban Hong" ,"province_id" => "39" ],
            [ "id" => "598" ,"code" => "5104" ,"name_th" => "ลี้" ,"name_en" => "Li" ,"province_id" => "39" ],
            [ "id" => "599" ,"code" => "5105" ,"name_th" => "ทุ่งหัวช้าง" ,"name_en" => "Thung Hua Chang" ,"province_id" => "39" ],
            [ "id" => "600" ,"code" => "5106" ,"name_th" => "ป่าซาง" ,"name_en" => "Pa Sang" ,"province_id" => "39" ],
            [ "id" => "601" ,"code" => "5107" ,"name_th" => "บ้านธิ" ,"name_en" => "Ban Thi" ,"province_id" => "39" ],
            [ "id" => "602" ,"code" => "5108" ,"name_th" => "เวียงหนองล่อง" ,"name_en" => "Wiang Nong Long" ,"province_id" => "39" ],
            [ "id" => "603" ,"code" => "5201" ,"name_th" => "เมืองลำปาง" ,"name_en" => "Mueang Lampang" ,"province_id" => "40" ],
            [ "id" => "604" ,"code" => "5202" ,"name_th" => "แม่เมาะ" ,"name_en" => "Mae Mo" ,"province_id" => "40" ],
            [ "id" => "605" ,"code" => "5203" ,"name_th" => "เกาะคา" ,"name_en" => "Ko Kha" ,"province_id" => "40" ],
            [ "id" => "606" ,"code" => "5204" ,"name_th" => "เสริมงาม" ,"name_en" => "Soem Ngam" ,"province_id" => "40" ],
            [ "id" => "607" ,"code" => "5205" ,"name_th" => "งาว" ,"name_en" => "Ngao" ,"province_id" => "40" ],
            [ "id" => "608" ,"code" => "5206" ,"name_th" => "แจ้ห่ม" ,"name_en" => "Chae Hom" ,"province_id" => "40" ],
            [ "id" => "609" ,"code" => "5207" ,"name_th" => "วังเหนือ" ,"name_en" => "Wang Nuea" ,"province_id" => "40" ],
            [ "id" => "610" ,"code" => "5208" ,"name_th" => "เถิน" ,"name_en" => "Thoen" ,"province_id" => "40" ],
            [ "id" => "611" ,"code" => "5209" ,"name_th" => "แม่พริก" ,"name_en" => "Mae Phrik" ,"province_id" => "40" ],
            [ "id" => "612" ,"code" => "5210" ,"name_th" => "แม่ทะ" ,"name_en" => "Mae Tha" ,"province_id" => "40" ],
            [ "id" => "613" ,"code" => "5211" ,"name_th" => "สบปราบ" ,"name_en" => "Sop Prap" ,"province_id" => "40" ],
            [ "id" => "614" ,"code" => "5212" ,"name_th" => "ห้างฉัตร" ,"name_en" => "Hang Chat" ,"province_id" => "40" ],
            [ "id" => "615" ,"code" => "5213" ,"name_th" => "เมืองปาน" ,"name_en" => "Mueang Pan" ,"province_id" => "40" ],
            [ "id" => "616" ,"code" => "5301" ,"name_th" => "เมืองอุตรดิตถ์" ,"name_en" => "Mueang Uttaradit" ,"province_id" => "41" ],
            [ "id" => "617" ,"code" => "5302" ,"name_th" => "ตรอน" ,"name_en" => "Tron" ,"province_id" => "41" ],
            [ "id" => "618" ,"code" => "5303" ,"name_th" => "ท่าปลา" ,"name_en" => "Tha Pla" ,"province_id" => "41" ],
            [ "id" => "619" ,"code" => "5304" ,"name_th" => "น้ำปาด" ,"name_en" => "Nam Pat" ,"province_id" => "41" ],
            [ "id" => "620" ,"code" => "5305" ,"name_th" => "ฟากท่า" ,"name_en" => "Fak Tha" ,"province_id" => "41" ],
            [ "id" => "621" ,"code" => "5306" ,"name_th" => "บ้านโคก" ,"name_en" => "Ban Khok" ,"province_id" => "41" ],
            [ "id" => "622" ,"code" => "5307" ,"name_th" => "พิชัย" ,"name_en" => "Phichai" ,"province_id" => "41" ],
            [ "id" => "623" ,"code" => "5308" ,"name_th" => "ลับแล" ,"name_en" => "Laplae" ,"province_id" => "41" ],
            [ "id" => "624" ,"code" => "5309" ,"name_th" => "ทองแสนขัน" ,"name_en" => "Thong Saen Khan" ,"province_id" => "41" ],
            [ "id" => "625" ,"code" => "5401" ,"name_th" => "เมืองแพร่" ,"name_en" => "Mueang Phrae" ,"province_id" => "42" ],
            [ "id" => "626" ,"code" => "5402" ,"name_th" => "ร้องกวาง" ,"name_en" => "Rong Kwang" ,"province_id" => "42" ],
            [ "id" => "627" ,"code" => "5403" ,"name_th" => "ลอง" ,"name_en" => "Long" ,"province_id" => "42" ],
            [ "id" => "628" ,"code" => "5404" ,"name_th" => "สูงเม่น" ,"name_en" => "Sung Men" ,"province_id" => "42" ],
            [ "id" => "629" ,"code" => "5405" ,"name_th" => "เด่นชัย" ,"name_en" => "Den Chai" ,"province_id" => "42" ],
            [ "id" => "630" ,"code" => "5406" ,"name_th" => "สอง" ,"name_en" => "Song" ,"province_id" => "42" ],
            [ "id" => "631" ,"code" => "5407" ,"name_th" => "วังชิ้น" ,"name_en" => "Wang Chin" ,"province_id" => "42" ],
            [ "id" => "632" ,"code" => "5408" ,"name_th" => "หนองม่วงไข่" ,"name_en" => "Nong Muang Khai" ,"province_id" => "42" ],
            [ "id" => "633" ,"code" => "5501" ,"name_th" => "เมืองน่าน" ,"name_en" => "Mueang Nan" ,"province_id" => "43" ],
            [ "id" => "634" ,"code" => "5502" ,"name_th" => "แม่จริม" ,"name_en" => "Mae Charim" ,"province_id" => "43" ],
            [ "id" => "635" ,"code" => "5503" ,"name_th" => "บ้านหลวง" ,"name_en" => "Ban Luang" ,"province_id" => "43" ],
            [ "id" => "636" ,"code" => "5504" ,"name_th" => "นาน้อย" ,"name_en" => "Na Noi" ,"province_id" => "43" ],
            [ "id" => "637" ,"code" => "5505" ,"name_th" => "ปัว" ,"name_en" => "Pua" ,"province_id" => "43" ],
            [ "id" => "638" ,"code" => "5506" ,"name_th" => "ท่าวังผา" ,"name_en" => "Tha Wang Pha" ,"province_id" => "43" ],
            [ "id" => "639" ,"code" => "5507" ,"name_th" => "เวียงสา" ,"name_en" => "Wiang Sa" ,"province_id" => "43" ],
            [ "id" => "640" ,"code" => "5508" ,"name_th" => "ทุ่งช้าง" ,"name_en" => "Thung Chang" ,"province_id" => "43" ],
            [ "id" => "641" ,"code" => "5509" ,"name_th" => "เชียงกลาง" ,"name_en" => "Chiang Klang" ,"province_id" => "43" ],
            [ "id" => "642" ,"code" => "5510" ,"name_th" => "นาหมื่น" ,"name_en" => "Na Muen" ,"province_id" => "43" ],
            [ "id" => "643" ,"code" => "5511" ,"name_th" => "สันติสุข" ,"name_en" => "Santi Suk" ,"province_id" => "43" ],
            [ "id" => "644" ,"code" => "5512" ,"name_th" => "บ่อเกลือ" ,"name_en" => "Bo Kluea" ,"province_id" => "43" ],
            [ "id" => "645" ,"code" => "5513" ,"name_th" => "สองแคว" ,"name_en" => "Song Khwae" ,"province_id" => "43" ],
            [ "id" => "646" ,"code" => "5514" ,"name_th" => "ภูเพียง" ,"name_en" => "Phu Phiang" ,"province_id" => "43" ],
            [ "id" => "647" ,"code" => "5515" ,"name_th" => "เฉลิมพระเกียรติ" ,"name_en" => "Chaloem Phra Kiat" ,"province_id" => "43" ],
            [ "id" => "648" ,"code" => "5601" ,"name_th" => "เมืองพะเยา" ,"name_en" => "Mueang Phayao" ,"province_id" => "44" ],
            [ "id" => "649" ,"code" => "5602" ,"name_th" => "จุน" ,"name_en" => "Chun" ,"province_id" => "44" ],
            [ "id" => "650" ,"code" => "5603" ,"name_th" => "เชียงคำ" ,"name_en" => "Chiang Kham" ,"province_id" => "44" ],
            [ "id" => "651" ,"code" => "5604" ,"name_th" => "เชียงม่วน" ,"name_en" => "Chiang Muan" ,"province_id" => "44" ],
            [ "id" => "652" ,"code" => "5605" ,"name_th" => "ดอกคำใต้" ,"name_en" => "Dok Khamtai" ,"province_id" => "44" ],
            [ "id" => "653" ,"code" => "5606" ,"name_th" => "ปง" ,"name_en" => "Pong" ,"province_id" => "44" ],
            [ "id" => "654" ,"code" => "5607" ,"name_th" => "แม่ใจ" ,"name_en" => "Mae Chai" ,"province_id" => "44" ],
            [ "id" => "655" ,"code" => "5608" ,"name_th" => "ภูซาง" ,"name_en" => "Phu Sang" ,"province_id" => "44" ],
            [ "id" => "656" ,"code" => "5609" ,"name_th" => "ภูกามยาว" ,"name_en" => "Phu Kamyao" ,"province_id" => "44" ],
            [ "id" => "657" ,"code" => "5701" ,"name_th" => "เมืองเชียงราย" ,"name_en" => "Mueang Chiang Rai" ,"province_id" => "45" ],
            [ "id" => "658" ,"code" => "5702" ,"name_th" => "เวียงชัย" ,"name_en" => "Wiang Chai" ,"province_id" => "45" ],
            [ "id" => "659" ,"code" => "5703" ,"name_th" => "เชียงของ" ,"name_en" => "Chiang Khong" ,"province_id" => "45" ],
            [ "id" => "660" ,"code" => "5704" ,"name_th" => "เทิง" ,"name_en" => "Thoeng" ,"province_id" => "45" ],
            [ "id" => "661" ,"code" => "5705" ,"name_th" => "พาน" ,"name_en" => "Phan" ,"province_id" => "45" ],
            [ "id" => "662" ,"code" => "5706" ,"name_th" => "ป่าแดด" ,"name_en" => "Pa Daet" ,"province_id" => "45" ],
            [ "id" => "663" ,"code" => "5707" ,"name_th" => "แม่จัน" ,"name_en" => "Mae Chan" ,"province_id" => "45" ],
            [ "id" => "664" ,"code" => "5708" ,"name_th" => "เชียงแสน" ,"name_en" => "Chiang Saen" ,"province_id" => "45" ],
            [ "id" => "665" ,"code" => "5709" ,"name_th" => "แม่สาย" ,"name_en" => "Mae Sai" ,"province_id" => "45" ],
            [ "id" => "666" ,"code" => "5710" ,"name_th" => "แม่สรวย" ,"name_en" => "Mae Suai" ,"province_id" => "45" ],
            [ "id" => "667" ,"code" => "5711" ,"name_th" => "เวียงป่าเป้า" ,"name_en" => "Wiang Pa Pao" ,"province_id" => "45" ],
            [ "id" => "668" ,"code" => "5712" ,"name_th" => "พญาเม็งราย" ,"name_en" => "Phaya Mengrai" ,"province_id" => "45" ],
            [ "id" => "669" ,"code" => "5713" ,"name_th" => "เวียงแก่น" ,"name_en" => "Wiang Kaen" ,"province_id" => "45" ],
            [ "id" => "670" ,"code" => "5714" ,"name_th" => "ขุนตาล" ,"name_en" => "Khun Tan" ,"province_id" => "45" ],
            [ "id" => "671" ,"code" => "5715" ,"name_th" => "แม่ฟ้าหลวง" ,"name_en" => "Mae Fa Luang" ,"province_id" => "45" ],
            [ "id" => "672" ,"code" => "5716" ,"name_th" => "แม่ลาว" ,"name_en" => "Mae Lao" ,"province_id" => "45" ],
            [ "id" => "673" ,"code" => "5717" ,"name_th" => "เวียงเชียงรุ้ง" ,"name_en" => "Wiang Chiang Rung" ,"province_id" => "45" ],
            [ "id" => "674" ,"code" => "5718" ,"name_th" => "ดอยหลวง" ,"name_en" => "Doi Luang" ,"province_id" => "45" ],
            [ "id" => "675" ,"code" => "5801" ,"name_th" => "เมืองแม่ฮ่องสอน" ,"name_en" => "Mueang Mae Hong Son" ,"province_id" => "46" ],
            [ "id" => "676" ,"code" => "5802" ,"name_th" => "ขุนยวม" ,"name_en" => "Khun Yuam" ,"province_id" => "46" ],
            [ "id" => "677" ,"code" => "5803" ,"name_th" => "ปาย" ,"name_en" => "Pai" ,"province_id" => "46" ],
            [ "id" => "678" ,"code" => "5804" ,"name_th" => "แม่สะเรียง" ,"name_en" => "Mae Sariang" ,"province_id" => "46" ],
            [ "id" => "679" ,"code" => "5805" ,"name_th" => "แม่ลาน้อย" ,"name_en" => "Mae La Noi" ,"province_id" => "46" ],
            [ "id" => "680" ,"code" => "5806" ,"name_th" => "สบเมย" ,"name_en" => "Sop Moei" ,"province_id" => "46" ],
            [ "id" => "681" ,"code" => "5807" ,"name_th" => "ปางมะผ้า" ,"name_en" => "Pang Mapha" ,"province_id" => "46" ],
            [ "id" => "682" ,"code" => "5881" ,"name_th" => "*อ.ม่วยต่อ จ.แม่ฮ่องสอน" ,"name_en" => "Muen Tor" ,"province_id" => "46" ],
            [ "id" => "683" ,"code" => "6001" ,"name_th" => "เมืองนครสวรรค์" ,"name_en" => "Mueang Nakhon Sawan" ,"province_id" => "47" ],
            [ "id" => "684" ,"code" => "6002" ,"name_th" => "โกรกพระ" ,"name_en" => "Krok Phra" ,"province_id" => "47" ],
            [ "id" => "685" ,"code" => "6003" ,"name_th" => "ชุมแสง" ,"name_en" => "Chum Saeng" ,"province_id" => "47" ],
            [ "id" => "686" ,"code" => "6004" ,"name_th" => "หนองบัว" ,"name_en" => "Nong Bua" ,"province_id" => "47" ],
            [ "id" => "687" ,"code" => "6005" ,"name_th" => "บรรพตพิสัย" ,"name_en" => "Banphot Phisai" ,"province_id" => "47" ],
            [ "id" => "688" ,"code" => "6006" ,"name_th" => "เก้าเลี้ยว" ,"name_en" => "Kao Liao" ,"province_id" => "47" ],
            [ "id" => "689" ,"code" => "6007" ,"name_th" => "ตาคลี" ,"name_en" => "Takhli" ,"province_id" => "47" ],
            [ "id" => "690" ,"code" => "6008" ,"name_th" => "ท่าตะโก" ,"name_en" => "Takhli" ,"province_id" => "47" ],
            [ "id" => "691" ,"code" => "6009" ,"name_th" => "ไพศาลี" ,"name_en" => "Phaisali" ,"province_id" => "47" ],
            [ "id" => "692" ,"code" => "6010" ,"name_th" => "พยุหะคีรี" ,"name_en" => "Phayuha Khiri" ,"province_id" => "47" ],
            [ "id" => "693" ,"code" => "6011" ,"name_th" => "ลาดยาว" ,"name_en" => "Phayuha Khiri" ,"province_id" => "47" ],
            [ "id" => "694" ,"code" => "6012" ,"name_th" => "ตากฟ้า" ,"name_en" => "Tak Fa" ,"province_id" => "47" ],
            [ "id" => "695" ,"code" => "6013" ,"name_th" => "แม่วงก์" ,"name_en" => "Mae Wong" ,"province_id" => "47" ],
            [ "id" => "696" ,"code" => "6014" ,"name_th" => "แม่เปิน" ,"name_en" => "Mae Poen" ,"province_id" => "47" ],
            [ "id" => "697" ,"code" => "6015" ,"name_th" => "ชุมตาบง" ,"name_en" => "Chum Ta Bong" ,"province_id" => "47" ],
            [ "id" => "698" ,"code" => "6051" ,"name_th" => "สาขาตำบลห้วยน้ำหอม*" ,"name_en" => "Huen Nam Hom" ,"province_id" => "47" ],
            [ "id" => "699" ,"code" => "6052" ,"name_th" => "กิ่งอำเภอชุมตาบง (สาขาตำบลชุมตาบง)*" ,"name_en" => "Chum Ta Bong" ,"province_id" => "47" ],
            [ "id" => "700" ,"code" => "6053" ,"name_th" => "แม่วงก์ (สาขาตำบลแม่เล่ย์)*" ,"name_en" => "Mea Ley" ,"province_id" => "47" ],
            [ "id" => "701" ,"code" => "6101" ,"name_th" => "เมืองอุทัยธานี" ,"name_en" => "Mueang Uthai Thani" ,"province_id" => "48" ],
            [ "id" => "702" ,"code" => "6102" ,"name_th" => "ทัพทัน" ,"name_en" => "Thap Than" ,"province_id" => "48" ],
            [ "id" => "703" ,"code" => "6103" ,"name_th" => "สว่างอารมณ์" ,"name_en" => "Sawang Arom" ,"province_id" => "48" ],
            [ "id" => "704" ,"code" => "6104" ,"name_th" => "หนองฉาง" ,"name_en" => "Nong Chang" ,"province_id" => "48" ],
            [ "id" => "705" ,"code" => "6105" ,"name_th" => "หนองขาหย่าง" ,"name_en" => "Nong Khayang" ,"province_id" => "48" ],
            [ "id" => "706" ,"code" => "6106" ,"name_th" => "บ้านไร่" ,"name_en" => "Ban Rai" ,"province_id" => "48" ],
            [ "id" => "707" ,"code" => "6107" ,"name_th" => "ลานสัก" ,"name_en" => "Lan Sak" ,"province_id" => "48" ],
            [ "id" => "708" ,"code" => "6108" ,"name_th" => "ห้วยคต" ,"name_en" => "Huai Khot" ,"province_id" => "48" ],
            [ "id" => "709" ,"code" => "6201" ,"name_th" => "เมืองกำแพงเพชร" ,"name_en" => "Mueang Kamphaeng Phet" ,"province_id" => "49" ],
            [ "id" => "710" ,"code" => "6202" ,"name_th" => "ไทรงาม" ,"name_en" => "Sai Ngam" ,"province_id" => "49" ],
            [ "id" => "711" ,"code" => "6203" ,"name_th" => "คลองลาน" ,"name_en" => "Khlong Lan" ,"province_id" => "49" ],
            [ "id" => "712" ,"code" => "6204" ,"name_th" => "ขาณุวรลักษบุรี" ,"name_en" => "Khanu Woralaksaburi" ,"province_id" => "49" ],
            [ "id" => "713" ,"code" => "6205" ,"name_th" => "คลองขลุง" ,"name_en" => "Khlong Khlung" ,"province_id" => "49" ],
            [ "id" => "714" ,"code" => "6206" ,"name_th" => "พรานกระต่าย" ,"name_en" => "Phran Kratai" ,"province_id" => "49" ],
            [ "id" => "715" ,"code" => "6207" ,"name_th" => "ลานกระบือ" ,"name_en" => "Lan Krabue" ,"province_id" => "49" ],
            [ "id" => "716" ,"code" => "6208" ,"name_th" => "ทรายทองวัฒนา" ,"name_en" => "Sai Thong Watthana" ,"province_id" => "49" ],
            [ "id" => "717" ,"code" => "6209" ,"name_th" => "ปางศิลาทอง" ,"name_en" => "Pang Sila Thong" ,"province_id" => "49" ],
            [ "id" => "718" ,"code" => "6210" ,"name_th" => "บึงสามัคคี" ,"name_en" => "Bueng Samakkhi" ,"province_id" => "49" ],
            [ "id" => "719" ,"code" => "6211" ,"name_th" => "โกสัมพีนคร" ,"name_en" => "Kosamphi Nakhon" ,"province_id" => "49" ],
            [ "id" => "720" ,"code" => "6301" ,"name_th" => "เมืองตาก" ,"name_en" => "Mueang Tak" ,"province_id" => "50" ],
            [ "id" => "721" ,"code" => "6302" ,"name_th" => "บ้านตาก" ,"name_en" => "Ban Tak" ,"province_id" => "50" ],
            [ "id" => "722" ,"code" => "6303" ,"name_th" => "สามเงา" ,"name_en" => "Sam Ngao" ,"province_id" => "50" ],
            [ "id" => "723" ,"code" => "6304" ,"name_th" => "แม่ระมาด" ,"name_en" => "Mae Ramat" ,"province_id" => "50" ],
            [ "id" => "724" ,"code" => "6305" ,"name_th" => "ท่าสองยาง" ,"name_en" => "Tha Song Yang" ,"province_id" => "50" ],
            [ "id" => "725" ,"code" => "6306" ,"name_th" => "แม่สอด" ,"name_en" => "Mae Sot" ,"province_id" => "50" ],
            [ "id" => "726" ,"code" => "6307" ,"name_th" => "พบพระ" ,"name_en" => "Phop Phra" ,"province_id" => "50" ],
            [ "id" => "727" ,"code" => "6308" ,"name_th" => "อุ้มผาง" ,"name_en" => "Umphang" ,"province_id" => "50" ],
            [ "id" => "728" ,"code" => "6309" ,"name_th" => "วังเจ้า" ,"name_en" => "Wang Chao" ,"province_id" => "50" ],
            [ "id" => "729" ,"code" => "6381" ,"name_th" => "*กิ่ง อ.ท่าปุย จ.ตาก" ,"name_en" => "*King Ta Pui" ,"province_id" => "50" ],
            [ "id" => "730" ,"code" => "6401" ,"name_th" => "เมืองสุโขทัย" ,"name_en" => "Mueang Sukhothai" ,"province_id" => "51" ],
            [ "id" => "731" ,"code" => "6402" ,"name_th" => "บ้านด่านลานหอย" ,"name_en" => "Ban Dan Lan Hoi" ,"province_id" => "51" ],
            [ "id" => "732" ,"code" => "6403" ,"name_th" => "คีรีมาศ" ,"name_en" => "Khiri Mat" ,"province_id" => "51" ],
            [ "id" => "733" ,"code" => "6404" ,"name_th" => "กงไกรลาศ" ,"name_en" => "Kong Krailat" ,"province_id" => "51" ],
            [ "id" => "734" ,"code" => "6405" ,"name_th" => "ศรีสัชนาลัย" ,"name_en" => "Si Satchanalai" ,"province_id" => "51" ],
            [ "id" => "735" ,"code" => "6406" ,"name_th" => "ศรีสำโรง" ,"name_en" => "Si Samrong" ,"province_id" => "51" ],
            [ "id" => "736" ,"code" => "6407" ,"name_th" => "สวรรคโลก" ,"name_en" => "Sawankhalok" ,"province_id" => "51" ],
            [ "id" => "737" ,"code" => "6408" ,"name_th" => "ศรีนคร" ,"name_en" => "Si Nakhon" ,"province_id" => "51" ],
            [ "id" => "738" ,"code" => "6409" ,"name_th" => "ทุ่งเสลี่ยม" ,"name_en" => "Thung Saliam" ,"province_id" => "51" ],
            [ "id" => "739" ,"code" => "6501" ,"name_th" => "เมืองพิษณุโลก" ,"name_en" => "Mueang Phitsanulok" ,"province_id" => "52" ],
            [ "id" => "740" ,"code" => "6502" ,"name_th" => "นครไทย" ,"name_en" => "Nakhon Thai" ,"province_id" => "52" ],
            [ "id" => "741" ,"code" => "6503" ,"name_th" => "ชาติตระการ" ,"name_en" => "Chat Trakan" ,"province_id" => "52" ],
            [ "id" => "742" ,"code" => "6504" ,"name_th" => "บางระกำ" ,"name_en" => "Bang Rakam" ,"province_id" => "52" ],
            [ "id" => "743" ,"code" => "6505" ,"name_th" => "บางกระทุ่ม" ,"name_en" => "Bang Krathum" ,"province_id" => "52" ],
            [ "id" => "744" ,"code" => "6506" ,"name_th" => "พรหมพิราม" ,"name_en" => "Phrom Phiram" ,"province_id" => "52" ],
            [ "id" => "745" ,"code" => "6507" ,"name_th" => "วัดโบสถ์" ,"name_en" => "Wat Bot" ,"province_id" => "52" ],
            [ "id" => "746" ,"code" => "6508" ,"name_th" => "วังทอง" ,"name_en" => "Wang Thong" ,"province_id" => "52" ],
            [ "id" => "747" ,"code" => "6509" ,"name_th" => "เนินมะปราง" ,"name_en" => "Noen Maprang" ,"province_id" => "52" ],
            [ "id" => "748" ,"code" => "6601" ,"name_th" => "เมืองพิจิตร" ,"name_en" => "Mueang Phichit" ,"province_id" => "53" ],
            [ "id" => "749" ,"code" => "6602" ,"name_th" => "วังทรายพูน" ,"name_en" => "Wang Sai Phun" ,"province_id" => "53" ],
            [ "id" => "750" ,"code" => "6603" ,"name_th" => "โพธิ์ประทับช้าง" ,"name_en" => "Pho Prathap Chang" ,"province_id" => "53" ],
            [ "id" => "751" ,"code" => "6604" ,"name_th" => "ตะพานหิน" ,"name_en" => "Taphan Hin" ,"province_id" => "53" ],
            [ "id" => "752" ,"code" => "6605" ,"name_th" => "บางมูลนาก" ,"name_en" => "Bang Mun Nak" ,"province_id" => "53" ],
            [ "id" => "753" ,"code" => "6606" ,"name_th" => "โพทะเล" ,"name_en" => "Pho Thale" ,"province_id" => "53" ],
            [ "id" => "754" ,"code" => "6607" ,"name_th" => "สามง่าม" ,"name_en" => "Sam Ngam" ,"province_id" => "53" ],
            [ "id" => "755" ,"code" => "6608" ,"name_th" => "ทับคล้อ" ,"name_en" => "Tap Khlo" ,"province_id" => "53" ],
            [ "id" => "756" ,"code" => "6609" ,"name_th" => "สากเหล็ก" ,"name_en" => "Sak Lek" ,"province_id" => "53" ],
            [ "id" => "757" ,"code" => "6610" ,"name_th" => "บึงนาราง" ,"name_en" => "Bueng Na Rang" ,"province_id" => "53" ],
            [ "id" => "758" ,"code" => "6611" ,"name_th" => "ดงเจริญ" ,"name_en" => "Dong Charoen" ,"province_id" => "53" ],
            [ "id" => "759" ,"code" => "6612" ,"name_th" => "วชิรบารมี" ,"name_en" => "Wachirabarami" ,"province_id" => "53" ],
            [ "id" => "760" ,"code" => "6701" ,"name_th" => "เมืองเพชรบูรณ์" ,"name_en" => "Mueang Phetchabun" ,"province_id" => "54" ],
            [ "id" => "761" ,"code" => "6702" ,"name_th" => "ชนแดน" ,"name_en" => "Chon Daen" ,"province_id" => "54" ],
            [ "id" => "762" ,"code" => "6703" ,"name_th" => "หล่มสัก" ,"name_en" => "Lom Sak" ,"province_id" => "54" ],
            [ "id" => "763" ,"code" => "6704" ,"name_th" => "หล่มเก่า" ,"name_en" => "Lom Kao" ,"province_id" => "54" ],
            [ "id" => "764" ,"code" => "6705" ,"name_th" => "วิเชียรบุรี" ,"name_en" => "Wichian Buri" ,"province_id" => "54" ],
            [ "id" => "765" ,"code" => "6706" ,"name_th" => "ศรีเทพ" ,"name_en" => "Si Thep" ,"province_id" => "54" ],
            [ "id" => "766" ,"code" => "6707" ,"name_th" => "หนองไผ่" ,"name_en" => "Nong Phai" ,"province_id" => "54" ],
            [ "id" => "767" ,"code" => "6708" ,"name_th" => "บึงสามพัน" ,"name_en" => "Bueng Sam Phan" ,"province_id" => "54" ],
            [ "id" => "768" ,"code" => "6709" ,"name_th" => "น้ำหนาว" ,"name_en" => "Nam Nao" ,"province_id" => "54" ],
            [ "id" => "769" ,"code" => "6710" ,"name_th" => "วังโป่ง" ,"name_en" => "Wang Pong" ,"province_id" => "54" ],
            [ "id" => "770" ,"code" => "6711" ,"name_th" => "เขาค้อ" ,"name_en" => "Khao Kho" ,"province_id" => "54" ],
            [ "id" => "771" ,"code" => "7001" ,"name_th" => "เมืองราชบุรี" ,"name_en" => "Mueang Ratchaburi" ,"province_id" => "55" ],
            [ "id" => "772" ,"code" => "7002" ,"name_th" => "จอมบึง" ,"name_en" => "Chom Bueng" ,"province_id" => "55" ],
            [ "id" => "773" ,"code" => "7003" ,"name_th" => "สวนผึ้ง" ,"name_en" => "Suan Phueng" ,"province_id" => "55" ],
            [ "id" => "774" ,"code" => "7004" ,"name_th" => "ดำเนินสะดวก" ,"name_en" => "Damnoen Saduak" ,"province_id" => "55" ],
            [ "id" => "775" ,"code" => "7005" ,"name_th" => "บ้านโป่ง" ,"name_en" => "Ban Pong" ,"province_id" => "55" ],
            [ "id" => "776" ,"code" => "7006" ,"name_th" => "บางแพ" ,"name_en" => "Bang Phae" ,"province_id" => "55" ],
            [ "id" => "777" ,"code" => "7007" ,"name_th" => "โพธาราม" ,"name_en" => "Photharam" ,"province_id" => "55" ],
            [ "id" => "778" ,"code" => "7008" ,"name_th" => "ปากท่อ" ,"name_en" => "Pak Tho" ,"province_id" => "55" ],
            [ "id" => "779" ,"code" => "7009" ,"name_th" => "วัดเพลง" ,"name_en" => "Wat Phleng" ,"province_id" => "55" ],
            [ "id" => "780" ,"code" => "7010" ,"name_th" => "บ้านคา" ,"name_en" => "Ban Kha" ,"province_id" => "55" ],
            [ "id" => "781" ,"code" => "7074" ,"name_th" => "ท้องถิ่นเทศบาลตำบลบ้านฆ้อง" ,"name_en" => "Tet Saban Ban Kong" ,"province_id" => "55" ],
            [ "id" => "782" ,"code" => "7101" ,"name_th" => "เมืองกาญจนบุรี" ,"name_en" => "Mueang Kanchanaburi" ,"province_id" => "56" ],
            [ "id" => "783" ,"code" => "7102" ,"name_th" => "ไทรโยค" ,"name_en" => "Sai Yok" ,"province_id" => "56" ],
            [ "id" => "784" ,"code" => "7103" ,"name_th" => "บ่อพลอย" ,"name_en" => "Bo Phloi" ,"province_id" => "56" ],
            [ "id" => "785" ,"code" => "7104" ,"name_th" => "ศรีสวัสดิ์" ,"name_en" => "Si Sawat" ,"province_id" => "56" ],
            [ "id" => "786" ,"code" => "7105" ,"name_th" => "ท่ามะกา" ,"name_en" => "Tha Maka" ,"province_id" => "56" ],
            [ "id" => "787" ,"code" => "7106" ,"name_th" => "ท่าม่วง" ,"name_en" => "Tha Muang" ,"province_id" => "56" ],
            [ "id" => "788" ,"code" => "7107" ,"name_th" => "ทองผาภูมิ" ,"name_en" => "Pha Phum" ,"province_id" => "56" ],
            [ "id" => "789" ,"code" => "7108" ,"name_th" => "สังขละบุรี" ,"name_en" => "Sangkhla Buri" ,"province_id" => "56" ],
            [ "id" => "790" ,"code" => "7109" ,"name_th" => "พนมทวน" ,"name_en" => "Phanom Thuan" ,"province_id" => "56" ],
            [ "id" => "791" ,"code" => "7110" ,"name_th" => "เลาขวัญ" ,"name_en" => "Lao Khwan" ,"province_id" => "56" ],
            [ "id" => "792" ,"code" => "7111" ,"name_th" => "ด่านมะขามเตี้ย" ,"name_en" => "Dan Makham Tia" ,"province_id" => "56" ],
            [ "id" => "793" ,"code" => "7112" ,"name_th" => "หนองปรือ" ,"name_en" => "Nong Prue" ,"province_id" => "56" ],
            [ "id" => "794" ,"code" => "7113" ,"name_th" => "ห้วยกระเจา" ,"name_en" => "Huai Krachao" ,"province_id" => "56" ],
            [ "id" => "795" ,"code" => "7151" ,"name_th" => "สาขาตำบลท่ากระดาน*" ,"name_en" => "Tha Kra Dan" ,"province_id" => "56" ],
            [ "id" => "796" ,"code" => "7181" ,"name_th" => "*บ้านทวน จ.กาญจนบุรี" ,"name_en" => "*Ban Tuan" ,"province_id" => "56" ],
            [ "id" => "797" ,"code" => "7201" ,"name_th" => "เมืองสุพรรณบุรี" ,"name_en" => "Mueang Suphan Buri" ,"province_id" => "57" ],
            [ "id" => "798" ,"code" => "7202" ,"name_th" => "เดิมบางนางบวช" ,"name_en" => "Doem Bang Nang Buat" ,"province_id" => "57" ],
            [ "id" => "799" ,"code" => "7203" ,"name_th" => "ด่านช้าง" ,"name_en" => "Dan Chang" ,"province_id" => "57" ],
            [ "id" => "800" ,"code" => "7204" ,"name_th" => "บางปลาม้า" ,"name_en" => "Bang Pla Ma" ,"province_id" => "57" ],
            [ "id" => "801" ,"code" => "7205" ,"name_th" => "ศรีประจันต์" ,"name_en" => "Si Prachan" ,"province_id" => "57" ],
            [ "id" => "802" ,"code" => "7206" ,"name_th" => "ดอนเจดีย์" ,"name_en" => "Don Chedi" ,"province_id" => "57" ],
            [ "id" => "803" ,"code" => "7207" ,"name_th" => "สองพี่น้อง" ,"name_en" => "Song Phi Nong" ,"province_id" => "57" ],
            [ "id" => "804" ,"code" => "7208" ,"name_th" => "สามชุก" ,"name_en" => "Sam Chuk" ,"province_id" => "57" ],
            [ "id" => "805" ,"code" => "7209" ,"name_th" => "อู่ทอง" ,"name_en" => "U Thong" ,"province_id" => "57" ],
            [ "id" => "806" ,"code" => "7210" ,"name_th" => "หนองหญ้าไซ" ,"name_en" => "Nong Ya Sai" ,"province_id" => "57" ],
            [ "id" => "807" ,"code" => "7301" ,"name_th" => "เมืองนครปฐม" ,"name_en" => "Mueang Nakhon Pathom" ,"province_id" => "58" ],
            [ "id" => "808" ,"code" => "7302" ,"name_th" => "กำแพงแสน" ,"name_en" => "Kamphaeng Saen" ,"province_id" => "58" ],
            [ "id" => "809" ,"code" => "7303" ,"name_th" => "นครชัยศรี" ,"name_en" => "Nakhon Chai Si" ,"province_id" => "58" ],
            [ "id" => "810" ,"code" => "7304" ,"name_th" => "ดอนตูม" ,"name_en" => "Don Tum" ,"province_id" => "58" ],
            [ "id" => "811" ,"code" => "7305" ,"name_th" => "บางเลน" ,"name_en" => "Bang Len" ,"province_id" => "58" ],
            [ "id" => "812" ,"code" => "7306" ,"name_th" => "สามพราน" ,"name_en" => "Sam Phran" ,"province_id" => "58" ],
            [ "id" => "813" ,"code" => "7307" ,"name_th" => "พุทธมณฑล" ,"name_en" => "Phutthamonthon" ,"province_id" => "58" ],
            [ "id" => "814" ,"code" => "7401" ,"name_th" => "เมืองสมุทรสาคร" ,"name_en" => "Mueang Samut Sakhon" ,"province_id" => "59" ],
            [ "id" => "815" ,"code" => "7402" ,"name_th" => "กระทุ่มแบน" ,"name_en" => "Krathum Baen" ,"province_id" => "59" ],
            [ "id" => "816" ,"code" => "7403" ,"name_th" => "บ้านแพ้ว" ,"name_en" => "Ban Phaeo" ,"province_id" => "59" ],
            [ "id" => "817" ,"code" => "7501" ,"name_th" => "เมืองสมุทรสงคราม" ,"name_en" => "Mueang Samut Songkhram" ,"province_id" => "60" ],
            [ "id" => "818" ,"code" => "7502" ,"name_th" => "บางคนที" ,"name_en" => "Bang Khonthi" ,"province_id" => "60" ],
            [ "id" => "819" ,"code" => "7503" ,"name_th" => "อัมพวา" ,"name_en" => "Amphawa" ,"province_id" => "60" ],
            [ "id" => "820" ,"code" => "7601" ,"name_th" => "เมืองเพชรบุรี" ,"name_en" => "Mueang Phetchaburi" ,"province_id" => "61" ],
            [ "id" => "821" ,"code" => "7602" ,"name_th" => "เขาย้อย" ,"name_en" => "Khao Yoi" ,"province_id" => "61" ],
            [ "id" => "822" ,"code" => "7603" ,"name_th" => "หนองหญ้าปล้อง" ,"name_en" => "Nong Ya Plong" ,"province_id" => "61" ],
            [ "id" => "823" ,"code" => "7604" ,"name_th" => "ชะอำ" ,"name_en" => "Cha-am" ,"province_id" => "61" ],
            [ "id" => "824" ,"code" => "7605" ,"name_th" => "ท่ายาง" ,"name_en" => "Tha Yang" ,"province_id" => "61" ],
            [ "id" => "825" ,"code" => "7606" ,"name_th" => "บ้านลาด" ,"name_en" => "Ban Lat" ,"province_id" => "61" ],
            [ "id" => "826" ,"code" => "7607" ,"name_th" => "บ้านแหลม" ,"name_en" => "Ban Laem" ,"province_id" => "61" ],
            [ "id" => "827" ,"code" => "7608" ,"name_th" => "แก่งกระจาน" ,"name_en" => "Kaeng Krachan" ,"province_id" => "61" ],
            [ "id" => "828" ,"code" => "7701" ,"name_th" => "เมืองประจวบคีรีขันธ์" ,"name_en" => "Mueang Prachuap Khiri Khan" ,"province_id" => "62" ],
            [ "id" => "829" ,"code" => "7702" ,"name_th" => "กุยบุรี" ,"name_en" => "Kui Buri" ,"province_id" => "62" ],
            [ "id" => "830" ,"code" => "7703" ,"name_th" => "ทับสะแก" ,"name_en" => "Thap Sakae" ,"province_id" => "62" ],
            [ "id" => "831" ,"code" => "7704" ,"name_th" => "บางสะพาน" ,"name_en" => "Bang Saphan" ,"province_id" => "62" ],
            [ "id" => "832" ,"code" => "7705" ,"name_th" => "บางสะพานน้อย" ,"name_en" => "Bang Saphan Noi" ,"province_id" => "62" ],
            [ "id" => "833" ,"code" => "7706" ,"name_th" => "ปราณบุรี" ,"name_en" => "Pran Buri" ,"province_id" => "62" ],
            [ "id" => "834" ,"code" => "7707" ,"name_th" => "หัวหิน" ,"name_en" => "Hua Hin" ,"province_id" => "62" ],
            [ "id" => "835" ,"code" => "7708" ,"name_th" => "สามร้อยยอด" ,"name_en" => "Sam Roi Yot" ,"province_id" => "62" ],
            [ "id" => "836" ,"code" => "8001" ,"name_th" => "เมืองนครศรีธรรมราช" ,"name_en" => "Mueang Nakhon Si Thammarat" ,"province_id" => "63" ],
            [ "id" => "837" ,"code" => "8002" ,"name_th" => "พรหมคีรี" ,"name_en" => "Phrom Khiri" ,"province_id" => "63" ],
            [ "id" => "838" ,"code" => "8003" ,"name_th" => "ลานสกา" ,"name_en" => "Lan Saka" ,"province_id" => "63" ],
            [ "id" => "839" ,"code" => "8004" ,"name_th" => "ฉวาง" ,"name_en" => "Chawang" ,"province_id" => "63" ],
            [ "id" => "840" ,"code" => "8005" ,"name_th" => "พิปูน" ,"name_en" => "Phipun" ,"province_id" => "63" ],
            [ "id" => "841" ,"code" => "8006" ,"name_th" => "เชียรใหญ่" ,"name_en" => "Chian Yai" ,"province_id" => "63" ],
            [ "id" => "842" ,"code" => "8007" ,"name_th" => "ชะอวด" ,"name_en" => "Cha-uat" ,"province_id" => "63" ],
            [ "id" => "843" ,"code" => "8008" ,"name_th" => "ท่าศาลา" ,"name_en" => "Tha Sala" ,"province_id" => "63" ],
            [ "id" => "844" ,"code" => "8009" ,"name_th" => "ทุ่งสง" ,"name_en" => "Thung Song" ,"province_id" => "63" ],
            [ "id" => "845" ,"code" => "8010" ,"name_th" => "นาบอน" ,"name_en" => "Na Bon" ,"province_id" => "63" ],
            [ "id" => "846" ,"code" => "8011" ,"name_th" => "ทุ่งใหญ่" ,"name_en" => "Thung Yai" ,"province_id" => "63" ],
            [ "id" => "847" ,"code" => "8012" ,"name_th" => "ปากพนัง" ,"name_en" => "Pak Phanang" ,"province_id" => "63" ],
            [ "id" => "848" ,"code" => "8013" ,"name_th" => "ร่อนพิบูลย์" ,"name_en" => "Ron Phibun" ,"province_id" => "63" ],
            [ "id" => "849" ,"code" => "8014" ,"name_th" => "สิชล" ,"name_en" => "Sichon" ,"province_id" => "63" ],
            [ "id" => "850" ,"code" => "8015" ,"name_th" => "ขนอม" ,"name_en" => "Khanom" ,"province_id" => "63" ],
            [ "id" => "851" ,"code" => "8016" ,"name_th" => "หัวไทร" ,"name_en" => "Hua Sai" ,"province_id" => "63" ],
            [ "id" => "852" ,"code" => "8017" ,"name_th" => "บางขัน" ,"name_en" => "Bang Khan" ,"province_id" => "63" ],
            [ "id" => "853" ,"code" => "8018" ,"name_th" => "ถ้ำพรรณรา" ,"name_en" => "Tham Phannara" ,"province_id" => "63" ],
            [ "id" => "854" ,"code" => "8019" ,"name_th" => "จุฬาภรณ์" ,"name_en" => "Chulabhorn" ,"province_id" => "63" ],
            [ "id" => "855" ,"code" => "8020" ,"name_th" => "พระพรหม" ,"name_en" => "Phra Phrom" ,"province_id" => "63" ],
            [ "id" => "856" ,"code" => "8021" ,"name_th" => "นบพิตำ" ,"name_en" => "Nopphitam" ,"province_id" => "63" ],
            [ "id" => "857" ,"code" => "8022" ,"name_th" => "ช้างกลาง" ,"name_en" => "Chang Klang" ,"province_id" => "63" ],
            [ "id" => "858" ,"code" => "8023" ,"name_th" => "เฉลิมพระเกียรติ" ,"name_en" => "Chaloem Phra Kiat" ,"province_id" => "63" ],
            [ "id" => "859" ,"code" => "8051" ,"name_th" => "เชียรใหญ่ (สาขาตำบลเสือหึง)*" ,"name_en" => "Chian Yai*" ,"province_id" => "63" ],
            [ "id" => "860" ,"code" => "8052" ,"name_th" => "สาขาตำบลสวนหลวง**" ,"name_en" => "Suan Luang" ,"province_id" => "63" ],
            [ "id" => "861" ,"code" => "8053" ,"name_th" => "ร่อนพิบูลย์ (สาขาตำบลหินตก)*" ,"name_en" => "Ron Phibun" ,"province_id" => "63" ],
            [ "id" => "862" ,"code" => "8054" ,"name_th" => "หัวไทร (สาขาตำบลควนชะลิก)*" ,"name_en" => "Hua Sai" ,"province_id" => "63" ],
            [ "id" => "863" ,"code" => "8055" ,"name_th" => "ทุ่งสง (สาขาตำบลกะปาง)*" ,"name_en" => "Thung Song" ,"province_id" => "63" ],
            [ "id" => "864" ,"code" => "8101" ,"name_th" => "เมืองกระบี่" ,"name_en" => "Mueang Krabi" ,"province_id" => "64" ],
            [ "id" => "865" ,"code" => "8102" ,"name_th" => "เขาพนม" ,"name_en" => "Khao Phanom" ,"province_id" => "64" ],
            [ "id" => "866" ,"code" => "8103" ,"name_th" => "เกาะลันตา" ,"name_en" => "Ko Lanta" ,"province_id" => "64" ],
            [ "id" => "867" ,"code" => "8104" ,"name_th" => "คลองท่อม" ,"name_en" => "Khlong Thom" ,"province_id" => "64" ],
            [ "id" => "868" ,"code" => "8105" ,"name_th" => "อ่าวลึก" ,"name_en" => "Ao Luek" ,"province_id" => "64" ],
            [ "id" => "869" ,"code" => "8106" ,"name_th" => "ปลายพระยา" ,"name_en" => "Plai Phraya" ,"province_id" => "64" ],
            [ "id" => "870" ,"code" => "8107" ,"name_th" => "ลำทับ" ,"name_en" => "Lam Thap" ,"province_id" => "64" ],
            [ "id" => "871" ,"code" => "8108" ,"name_th" => "เหนือคลอง" ,"name_en" => "Nuea Khlong" ,"province_id" => "64" ],
            [ "id" => "872" ,"code" => "8201" ,"name_th" => "เมืองพังงา" ,"name_en" => "Mueang Phang-nga" ,"province_id" => "65" ],
            [ "id" => "873" ,"code" => "8202" ,"name_th" => "เกาะยาว" ,"name_en" => "Ko Yao" ,"province_id" => "65" ],
            [ "id" => "874" ,"code" => "8203" ,"name_th" => "กะปง" ,"name_en" => "Kapong" ,"province_id" => "65" ],
            [ "id" => "875" ,"code" => "8204" ,"name_th" => "ตะกั่วทุ่ง" ,"name_en" => "Takua Thung" ,"province_id" => "65" ],
            [ "id" => "876" ,"code" => "8205" ,"name_th" => "ตะกั่วป่า" ,"name_en" => "Takua Pa" ,"province_id" => "65" ],
            [ "id" => "877" ,"code" => "8206" ,"name_th" => "คุระบุรี" ,"name_en" => "Khura Buri" ,"province_id" => "65" ],
            [ "id" => "878" ,"code" => "8207" ,"name_th" => "ทับปุด" ,"name_en" => "Thap Put" ,"province_id" => "65" ],
            [ "id" => "879" ,"code" => "8208" ,"name_th" => "ท้ายเหมือง" ,"name_en" => "Thai Mueang" ,"province_id" => "65" ],
            [ "id" => "880" ,"code" => "8301" ,"name_th" => "เมืองภูเก็ต" ,"name_en" => "Mueang Phuket" ,"province_id" => "66" ],
            [ "id" => "881" ,"code" => "8302" ,"name_th" => "กะทู้" ,"name_en" => "Kathu" ,"province_id" => "66" ],
            [ "id" => "882" ,"code" => "8303" ,"name_th" => "ถลาง" ,"name_en" => "Thalang" ,"province_id" => "66" ],
            [ "id" => "883" ,"code" => "8381" ,"name_th" => "*ทุ่งคา" ,"name_en" => "*Tung Ka" ,"province_id" => "66" ],
            [ "id" => "884" ,"code" => "8401" ,"name_th" => "เมืองสุราษฎร์ธานี" ,"name_en" => "Mueang Surat Thani" ,"province_id" => "67" ],
            [ "id" => "885" ,"code" => "8402" ,"name_th" => "กาญจนดิษฐ์" ,"name_en" => "Kanchanadit" ,"province_id" => "67" ],
            [ "id" => "886" ,"code" => "8403" ,"name_th" => "ดอนสัก" ,"name_en" => "Don Sak" ,"province_id" => "67" ],
            [ "id" => "887" ,"code" => "8404" ,"name_th" => "เกาะสมุย" ,"name_en" => "Ko Samui" ,"province_id" => "67" ],
            [ "id" => "888" ,"code" => "8405" ,"name_th" => "เกาะพะงัน" ,"name_en" => "Ko Pha-ngan" ,"province_id" => "67" ],
            [ "id" => "889" ,"code" => "8406" ,"name_th" => "ไชยา" ,"name_en" => "Chaiya" ,"province_id" => "67" ],
            [ "id" => "890" ,"code" => "8407" ,"name_th" => "ท่าชนะ" ,"name_en" => "Tha Chana" ,"province_id" => "67" ],
            [ "id" => "891" ,"code" => "8408" ,"name_th" => "คีรีรัฐนิคม" ,"name_en" => "Khiri Rat Nikhom" ,"province_id" => "67" ],
            [ "id" => "892" ,"code" => "8409" ,"name_th" => "บ้านตาขุน" ,"name_en" => "Ban Ta Khun" ,"province_id" => "67" ],
            [ "id" => "893" ,"code" => "8410" ,"name_th" => "พนม" ,"name_en" => "Phanom" ,"province_id" => "67" ],
            [ "id" => "894" ,"code" => "8411" ,"name_th" => "ท่าฉาง" ,"name_en" => "Tha Chang" ,"province_id" => "67" ],
            [ "id" => "895" ,"code" => "8412" ,"name_th" => "บ้านนาสาร" ,"name_en" => "Ban Na San" ,"province_id" => "67" ],
            [ "id" => "896" ,"code" => "8413" ,"name_th" => "บ้านนาเดิม" ,"name_en" => "Ban Na Doem" ,"province_id" => "67" ],
            [ "id" => "897" ,"code" => "8414" ,"name_th" => "เคียนซา" ,"name_en" => "Khian Sa" ,"province_id" => "67" ],
            [ "id" => "898" ,"code" => "8415" ,"name_th" => "เวียงสระ" ,"name_en" => "Wiang Sa" ,"province_id" => "67" ],
            [ "id" => "899" ,"code" => "8416" ,"name_th" => "พระแสง" ,"name_en" => "Phrasaeng" ,"province_id" => "67" ],
            [ "id" => "900" ,"code" => "8417" ,"name_th" => "พุนพิน" ,"name_en" => "Phunphin" ,"province_id" => "67" ],
            [ "id" => "901" ,"code" => "8418" ,"name_th" => "ชัยบุรี" ,"name_en" => "Chai Buri" ,"province_id" => "67" ],
            [ "id" => "902" ,"code" => "8419" ,"name_th" => "วิภาวดี" ,"name_en" => "Vibhavadi" ,"province_id" => "67" ],
            [ "id" => "903" ,"code" => "8451" ,"name_th" => "เกาะพงัน (สาขาตำบลเกาะเต่า)*" ,"name_en" => "Ko Pha-ngan" ,"province_id" => "67" ],
            [ "id" => "904" ,"code" => "8481" ,"name_th" => "*อ.บ้านดอน จ.สุราษฎร์ธานี" ,"name_en" => "*Ban Don" ,"province_id" => "67" ],
            [ "id" => "905" ,"code" => "8501" ,"name_th" => "เมืองระนอง" ,"name_en" => "Mueang Ranong" ,"province_id" => "68" ],
            [ "id" => "906" ,"code" => "8502" ,"name_th" => "ละอุ่น" ,"name_en" => "La-un" ,"province_id" => "68" ],
            [ "id" => "907" ,"code" => "8503" ,"name_th" => "กะเปอร์" ,"name_en" => "Kapoe" ,"province_id" => "68" ],
            [ "id" => "908" ,"code" => "8504" ,"name_th" => "กระบุรี" ,"name_en" => "Kra Buri" ,"province_id" => "68" ],
            [ "id" => "909" ,"code" => "8505" ,"name_th" => "สุขสำราญ" ,"name_en" => "Suk Samran" ,"province_id" => "68" ],
            [ "id" => "910" ,"code" => "8601" ,"name_th" => "เมืองชุมพร" ,"name_en" => "Mueang Chumphon" ,"province_id" => "69" ],
            [ "id" => "911" ,"code" => "8602" ,"name_th" => "ท่าแซะ" ,"name_en" => "Tha Sae" ,"province_id" => "69" ],
            [ "id" => "912" ,"code" => "8603" ,"name_th" => "ปะทิว" ,"name_en" => "Pathio" ,"province_id" => "69" ],
            [ "id" => "913" ,"code" => "8604" ,"name_th" => "หลังสวน" ,"name_en" => "Lang Suan" ,"province_id" => "69" ],
            [ "id" => "914" ,"code" => "8605" ,"name_th" => "ละแม" ,"name_en" => "Lamae" ,"province_id" => "69" ],
            [ "id" => "915" ,"code" => "8606" ,"name_th" => "พะโต๊ะ" ,"name_en" => "Phato" ,"province_id" => "69" ],
            [ "id" => "916" ,"code" => "8607" ,"name_th" => "สวี" ,"name_en" => "Sawi" ,"province_id" => "69" ],
            [ "id" => "917" ,"code" => "8608" ,"name_th" => "ทุ่งตะโก" ,"name_en" => "Thung Tako" ,"province_id" => "69" ],
            [ "id" => "918" ,"code" => "9001" ,"name_th" => "เมืองสงขลา" ,"name_en" => "Mueang Songkhla" ,"province_id" => "70" ],
            [ "id" => "919" ,"code" => "9002" ,"name_th" => "สทิงพระ" ,"name_en" => "Sathing Phra" ,"province_id" => "70" ],
            [ "id" => "920" ,"code" => "9003" ,"name_th" => "จะนะ" ,"name_en" => "Chana" ,"province_id" => "70" ],
            [ "id" => "921" ,"code" => "9004" ,"name_th" => "นาทวี" ,"name_en" => "Na Thawi" ,"province_id" => "70" ],
            [ "id" => "922" ,"code" => "9005" ,"name_th" => "เทพา" ,"name_en" => "Thepha" ,"province_id" => "70" ],
            [ "id" => "923" ,"code" => "9006" ,"name_th" => "สะบ้าย้อย" ,"name_en" => "Saba Yoi" ,"province_id" => "70" ],
            [ "id" => "924" ,"code" => "9007" ,"name_th" => "ระโนด" ,"name_en" => "Ranot" ,"province_id" => "70" ],
            [ "id" => "925" ,"code" => "9008" ,"name_th" => "กระแสสินธุ์" ,"name_en" => "Krasae Sin" ,"province_id" => "70" ],
            [ "id" => "926" ,"code" => "9009" ,"name_th" => "รัตภูมิ" ,"name_en" => "Rattaphum" ,"province_id" => "70" ],
            [ "id" => "927" ,"code" => "9010" ,"name_th" => "สะเดา" ,"name_en" => "Sadao" ,"province_id" => "70" ],
            [ "id" => "928" ,"code" => "9011" ,"name_th" => "หาดใหญ่" ,"name_en" => "Hat Yai" ,"province_id" => "70" ],
            [ "id" => "929" ,"code" => "9012" ,"name_th" => "นาหม่อม" ,"name_en" => "Na Mom" ,"province_id" => "70" ],
            [ "id" => "930" ,"code" => "9013" ,"name_th" => "ควนเนียง" ,"name_en" => "Khuan Niang" ,"province_id" => "70" ],
            [ "id" => "931" ,"code" => "9014" ,"name_th" => "บางกล่ำ" ,"name_en" => "Bang Klam" ,"province_id" => "70" ],
            [ "id" => "932" ,"code" => "9015" ,"name_th" => "สิงหนคร" ,"name_en" => "Singhanakhon" ,"province_id" => "70" ],
            [ "id" => "933" ,"code" => "9016" ,"name_th" => "คลองหอยโข่ง" ,"name_en" => "Khlong Hoi Khong" ,"province_id" => "70" ],
            [ "id" => "934" ,"code" => "9077" ,"name_th" => "ท้องถิ่นเทศบาลตำบลสำนักขาม" ,"name_en" => "Sum Nung Kam" ,"province_id" => "70" ],
            [ "id" => "935" ,"code" => "9096" ,"name_th" => "เทศบาลตำบลบ้านพรุ*" ,"name_en" => "Ban Pru*" ,"province_id" => "70" ],
            [ "id" => "936" ,"code" => "9101" ,"name_th" => "เมืองสตูล" ,"name_en" => "Mueang Satun" ,"province_id" => "71" ],
            [ "id" => "937" ,"code" => "9102" ,"name_th" => "ควนโดน" ,"name_en" => "Khuan Don" ,"province_id" => "71" ],
            [ "id" => "938" ,"code" => "9103" ,"name_th" => "ควนกาหลง" ,"name_en" => "Khuan Kalong" ,"province_id" => "71" ],
            [ "id" => "939" ,"code" => "9104" ,"name_th" => "ท่าแพ" ,"name_en" => "Tha Phae" ,"province_id" => "71" ],
            [ "id" => "940" ,"code" => "9105" ,"name_th" => "ละงู" ,"name_en" => "La-ngu" ,"province_id" => "71" ],
            [ "id" => "941" ,"code" => "9106" ,"name_th" => "ทุ่งหว้า" ,"name_en" => "Thung Wa" ,"province_id" => "71" ],
            [ "id" => "942" ,"code" => "9107" ,"name_th" => "มะนัง" ,"name_en" => "Manang" ,"province_id" => "71" ],
            [ "id" => "943" ,"code" => "9201" ,"name_th" => "เมืองตรัง" ,"name_en" => "Mueang Trang" ,"province_id" => "72" ],
            [ "id" => "944" ,"code" => "9202" ,"name_th" => "กันตัง" ,"name_en" => "Kantang" ,"province_id" => "72" ],
            [ "id" => "945" ,"code" => "9203" ,"name_th" => "ย่านตาขาว" ,"name_en" => "Yan Ta Khao" ,"province_id" => "72" ],
            [ "id" => "946" ,"code" => "9204" ,"name_th" => "ปะเหลียน" ,"name_en" => "Palian" ,"province_id" => "72" ],
            [ "id" => "947" ,"code" => "9205" ,"name_th" => "สิเกา" ,"name_en" => "Sikao" ,"province_id" => "72" ],
            [ "id" => "948" ,"code" => "9206" ,"name_th" => "ห้วยยอด" ,"name_en" => "Huai Yot" ,"province_id" => "72" ],
            [ "id" => "949" ,"code" => "9207" ,"name_th" => "วังวิเศษ" ,"name_en" => "Wang Wiset" ,"province_id" => "72" ],
            [ "id" => "950" ,"code" => "9208" ,"name_th" => "นาโยง" ,"name_en" => "Na Yong" ,"province_id" => "72" ],
            [ "id" => "951" ,"code" => "9209" ,"name_th" => "รัษฎา" ,"name_en" => "Ratsada" ,"province_id" => "72" ],
            [ "id" => "952" ,"code" => "9210" ,"name_th" => "หาดสำราญ" ,"name_en" => "Hat Samran" ,"province_id" => "72" ],
            [ "id" => "953" ,"code" => "9251" ,"name_th" => "อำเภอเมืองตรัง(สาขาคลองเต็ง)**" ,"name_en" => "Mueang Trang(Krong Teng)**" ,"province_id" => "72" ],
            [ "id" => "954" ,"code" => "9301" ,"name_th" => "เมืองพัทลุง" ,"name_en" => "Mueang Phatthalung" ,"province_id" => "73" ],
            [ "id" => "955" ,"code" => "9302" ,"name_th" => "กงหรา" ,"name_en" => "Kong Ra" ,"province_id" => "73" ],
            [ "id" => "956" ,"code" => "9303" ,"name_th" => "เขาชัยสน" ,"name_en" => "Khao Chaison" ,"province_id" => "73" ],
            [ "id" => "957" ,"code" => "9304" ,"name_th" => "ตะโหมด" ,"name_en" => "Tamot" ,"province_id" => "73" ],
            [ "id" => "958" ,"code" => "9305" ,"name_th" => "ควนขนุน" ,"name_en" => "Khuan Khanun" ,"province_id" => "73" ],
            [ "id" => "959" ,"code" => "9306" ,"name_th" => "ปากพะยูน" ,"name_en" => "Pak Phayun" ,"province_id" => "73" ],
            [ "id" => "960" ,"code" => "9307" ,"name_th" => "ศรีบรรพต" ,"name_en" => "Si Banphot" ,"province_id" => "73" ],
            [ "id" => "961" ,"code" => "9308" ,"name_th" => "ป่าบอน" ,"name_en" => "Pa Bon" ,"province_id" => "73" ],
            [ "id" => "962" ,"code" => "9309" ,"name_th" => "บางแก้ว" ,"name_en" => "Bang Kaeo" ,"province_id" => "73" ],
            [ "id" => "963" ,"code" => "9310" ,"name_th" => "ป่าพะยอม" ,"name_en" => "Pa Phayom" ,"province_id" => "73" ],
            [ "id" => "964" ,"code" => "9311" ,"name_th" => "ศรีนครินทร์" ,"name_en" => "Srinagarindra" ,"province_id" => "73" ],
            [ "id" => "965" ,"code" => "9401" ,"name_th" => "เมืองปัตตานี" ,"name_en" => "Mueang Pattani" ,"province_id" => "74" ],
            [ "id" => "966" ,"code" => "9402" ,"name_th" => "โคกโพธิ์" ,"name_en" => "Khok Pho" ,"province_id" => "74" ],
            [ "id" => "967" ,"code" => "9403" ,"name_th" => "หนองจิก" ,"name_en" => "Nong Chik" ,"province_id" => "74" ],
            [ "id" => "968" ,"code" => "9404" ,"name_th" => "ปะนาเระ" ,"name_en" => "Panare" ,"province_id" => "74" ],
            [ "id" => "969" ,"code" => "9405" ,"name_th" => "มายอ" ,"name_en" => "Mayo" ,"province_id" => "74" ],
            [ "id" => "970" ,"code" => "9406" ,"name_th" => "ทุ่งยางแดง" ,"name_en" => "Thung Yang Daeng" ,"province_id" => "74" ],
            [ "id" => "971" ,"code" => "9407" ,"name_th" => "สายบุรี" ,"name_en" => "Sai Buri" ,"province_id" => "74" ],
            [ "id" => "972" ,"code" => "9408" ,"name_th" => "ไม้แก่น" ,"name_en" => "Mai Kaen" ,"province_id" => "74" ],
            [ "id" => "973" ,"code" => "9409" ,"name_th" => "ยะหริ่ง" ,"name_en" => "Yaring" ,"province_id" => "74" ],
            [ "id" => "974" ,"code" => "9410" ,"name_th" => "ยะรัง" ,"name_en" => "Yarang" ,"province_id" => "74" ],
            [ "id" => "975" ,"code" => "9411" ,"name_th" => "กะพ้อ" ,"name_en" => "Kapho" ,"province_id" => "74" ],
            [ "id" => "976" ,"code" => "9412" ,"name_th" => "แม่ลาน" ,"name_en" => "Mae Lan" ,"province_id" => "74" ],
            [ "id" => "977" ,"code" => "9501" ,"name_th" => "เมืองยะลา" ,"name_en" => "Mueang Yala" ,"province_id" => "75" ],
            [ "id" => "978" ,"code" => "9502" ,"name_th" => "เบตง" ,"name_en" => "Betong" ,"province_id" => "75" ],
            [ "id" => "979" ,"code" => "9503" ,"name_th" => "บันนังสตา" ,"name_en" => "Bannang Sata" ,"province_id" => "75" ],
            [ "id" => "980" ,"code" => "9504" ,"name_th" => "ธารโต" ,"name_en" => "Than To" ,"province_id" => "75" ],
            [ "id" => "981" ,"code" => "9505" ,"name_th" => "ยะหา" ,"name_en" => "Yaha" ,"province_id" => "75" ],
            [ "id" => "982" ,"code" => "9506" ,"name_th" => "รามัน" ,"name_en" => "Raman" ,"province_id" => "75" ],
            [ "id" => "983" ,"code" => "9507" ,"name_th" => "กาบัง" ,"name_en" => "Kabang" ,"province_id" => "75" ],
            [ "id" => "984" ,"code" => "9508" ,"name_th" => "กรงปินัง" ,"name_en" => "Krong Pinang" ,"province_id" => "75" ],
            [ "id" => "985" ,"code" => "9601" ,"name_th" => "เมืองนราธิวาส" ,"name_en" => "Mueang Narathiwat" ,"province_id" => "76" ],
            [ "id" => "986" ,"code" => "9602" ,"name_th" => "ตากใบ" ,"name_en" => "Tak Bai" ,"province_id" => "76" ],
            [ "id" => "987" ,"code" => "9603" ,"name_th" => "บาเจาะ" ,"name_en" => "Bacho" ,"province_id" => "76" ],
            [ "id" => "988" ,"code" => "9604" ,"name_th" => "ยี่งอ" ,"name_en" => "Yi-ngo" ,"province_id" => "76" ],
            [ "id" => "989" ,"code" => "9605" ,"name_th" => "ระแงะ" ,"name_en" => "Ra-ngae" ,"province_id" => "76" ],
            [ "id" => "990" ,"code" => "9606" ,"name_th" => "รือเสาะ" ,"name_en" => "Rueso" ,"province_id" => "76" ],
            [ "id" => "991" ,"code" => "9607" ,"name_th" => "ศรีสาคร" ,"name_en" => "Si Sakhon" ,"province_id" => "76" ],
            [ "id" => "992" ,"code" => "9608" ,"name_th" => "แว้ง" ,"name_en" => "Waeng" ,"province_id" => "76" ],
            [ "id" => "993" ,"code" => "9609" ,"name_th" => "สุคิริน" ,"name_en" => "Sukhirin" ,"province_id" => "76" ],
            [ "id" => "994" ,"code" => "9610" ,"name_th" => "สุไหงโก-ลก" ,"name_en" => "Su-ngai Kolok" ,"province_id" => "76" ],
            [ "id" => "995" ,"code" => "9611" ,"name_th" => "สุไหงปาดี" ,"name_en" => "Su-ngai Padi" ,"province_id" => "76" ],
            [ "id" => "996" ,"code" => "9612" ,"name_th" => "จะแนะ" ,"name_en" => "Chanae" ,"province_id" => "76" ],
            [ "id" => "997" ,"code" => "9613" ,"name_th" => "เจาะไอร้อง" ,"name_en" => "Cho-airong" ,"province_id" => "76" ],
            [ "id" => "998" ,"code" => "9681" ,"name_th" => "*อ.บางนรา จ.นราธิวาส" ,"name_en" => "*Bang Nra" ,"province_id" => "76" ],
            [ "id" => "1005" ,"code" => "3807" ,"name_th" => "ปากคาด" ,"name_en" => "Pak Khat" ,"province_id" => "77" ],
            [ "id" => "1004" ,"code" => "3806" ,"name_th" => "บึงโขงหลง" ,"name_en" => "Bueng Khong Long" ,"province_id" => "77" ],
            [ "id" => "1003" ,"code" => "3805" ,"name_th" => "ศรีวิไล" ,"name_en" => "Si Wilai" ,"province_id" => "77" ],
            [ "id" => "1002" ,"code" => "3804" ,"name_th" => "พรเจริญ" ,"name_en" => "Phon Charoen" ,"province_id" => "77" ],
            [ "id" => "1001" ,"code" => "3803" ,"name_th" => "โซ่พิสัย" ,"name_en" => "So Phisai" ,"province_id" => "77" ],
            [ "id" => "1000" ,"code" => "3802" ,"name_th" => "เซกา" ,"name_en" => "Seka" ,"province_id" => "77" ],
            [ "id" => "999" ,"code" => "3801" ,"name_th" => "เมืองบึงกาฬ" ,"name_en" => "Mueang Bueng Kan" ,"province_id" => "77" ],
            [ "id" => "1006" ,"code" => "3808" ,"name_th" => "บุ่งคล้า" ,"name_en" => "Bung Khla" ,"province_id" => "77" ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_amupur');
    }
}
