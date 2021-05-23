<?php
include '../connect.php';

$name_menu = $_POST["manu_name"];

if (!empty($name_menu)) {

    $sql        = "SELECT * FROM menu WHERE menu_name='$name_menu' and active='1' ";
    $result     =   @$con->query($sql);
    $row        = $result->fetch_assoc();
    $row_nums   = $result->num_rows;

    $detail             = @$row["detail"];
    $ingredients        = @$row["Ingredients"];
    $cook               = @$row["cook"];

    $food_type          = @$row["food_type"];
    $fastival           = @$row["fastival"];
    $international      = @$row["international"];
    $local_food         = @$row["local_food"];
    $material           = @$row["material"];

    $confoodtype_1 = "";
    $confoodtype_2 = "";
    $confoodtype_3 = "";
    $confoodtype_4 = "";
    $confoodtype_5 = "";
    $confoodtype_6 = "";
    $confoodtype_7 = "";
    $confoodtype_8 = "";
    $confoodtype_9 = "";
    $confoodtype_10 = "";
    $confoodtype_11 = "";
    $confoodtype_12 = "";
    $confoodtype_13 = "";
    $confoodtype_14 = "";
    $confoodtype_15 = "";
    $confoodtype_16 = "";
    $confoodtype_17 = "";
    $confoodtype_18 = "";
    $confoodtype_19 = "";
    $confoodtype_20 = "";
    $confoodtype_21 = "";
    $confoodtype_22 = "";
    $confoodtype_23 = "";
    $confoodtype_24 = "";
    $confoodtype_25 = "";

    if($food_type=="1"){
        $confoodtype_1 = "checked";
    }else if($food_type=="2"){
        $confoodtype_2="checked";
    }else if($food_type=="3"){
        $confoodtype_3="checked";
    }else if($food_type=="4"){
        $confoodtype_4="checked";
    }else if($food_type=="5"){
        $confoodtype_5="checked";
    }else if($food_type=="6"){
        $confoodtype_6="checked";
    }else if($food_type=="7"){
        $confoodtype_7="checked";
    }else if($food_type=="8"){
        $confoodtype_8="checked";
    }else if($food_type=="9"){
        $confoodtype_9="checked";
    }else if($food_type=="10"){
        $confoodtype_10="checked";
    }else if($food_type=="11"){
        $confoodtype_11="checked";
    }else if($food_type=="12"){
        $confoodtype_12="checked";
    }else if($food_type=="13"){
        $confoodtype_13="checked";
    }else if($food_type=="14"){
        $confoodtype_14="checked";
    }else if($food_type=="15"){
        $confoodtype_15="checked";
    }else if($food_type=="16"){
        $confoodtype_16="checked";
    }else if($food_type=="17"){
        $confoodtype_17="checked";
    }else if($food_type=="18"){
        $confoodtype_18="checked";
    }else if($food_type=="19"){
        $confoodtype_19="checked";
    }else if($food_type=="20"){
        $confoodtype_20="checked";
    }else if($food_type=="21"){
        $confoodtype_21="checked";
    }else if($food_type=="22"){
        $confoodtype_22="checked";
    }else if($food_type=="23"){
        $confoodtype_23="checked";
    }else if($food_type=="24"){
        $confoodtype_24="checked";
    }else if($food_type=="25"){
        $confoodtype_25="checked";
    }


    $confastival_1 ="";
    $confastival_2 ="";
    $confastival_3 ="";
    $confastival_4 ="";
    $confastival_5 ="";
    $confastival_6 ="";
    $confastival_7 ="";
    $confastival_8 ="";
    $confastival_9 ="";

    if($fastival=="1"){
        $confastival_1 = "checked";
    }else if($fastival=="2"){
        $confastival_2="checked";
    }else if($fastival=="3"){
        $confastival_3="checked";
    }else if($fastival=="4"){
        $confastival_4="checked";
    }else if($fastival=="5"){
        $confastival_5="checked";
    }else if($fastival=="6"){
        $confastival_6="checked";
    }else if($fastival=="7"){
        $confastival_7="checked";
    }else if($fastival=="8"){
        $confastival_8="checked";
    }else if($fastival=="9"){
        $confastival_9="checked";
    }

    $coninternational_1 = "";
    $coninternational_2 = "";
    $coninternational_3 = "";
    $coninternational_4 = "";
    $coninternational_5 = "";
    $coninternational_6 = "";
    $coninternational_7 = "";
    $coninternational_8 = "";
    $coninternational_9 = "";
    $coninternational_10 = "";
    $coninternational_11 = "";

    if($international=="1"){
        $coninternational_1 = "checked";
    }else if($international=="2"){
        $coninternational_2="checked";
    }else if($international=="3"){
        $coninternational_3="checked";
    }else if($international=="4"){
        $coninternational_4="checked";
    }else if($international=="5"){
        $coninternational_5="checked";
    }else if($international=="6"){
        $coninternational_6="checked";
    }else if($international=="7"){
        $coninternational_7="checked";
    }else if($international=="8"){
        $coninternational_8="checked";
    }else if($international=="9"){
        $coninternational_9="checked";
    }else if($international=="10"){
        $coninternational_10="checked";
    }else if($international=="11"){
    $coninternational_11="checked";
    } 

    $conlocal_1 = "";
    $conlocal_2 = "";
    $conlocal_3 = "";
    $conlocal_4 = "";

    if($local_food=="1"){
        $conlocal_1 = "checked";
    }else if($local_food=="2"){
        $conlocal_2="checked";
    }else if($local_food=="3"){
        $conlocal_3="checked";
    }else if($local_food=="4"){
        $conlocal_4="checked";
    }

    $conmaterial_1  = "";
    $conmaterial_2  = "";
    $conmaterial_3  = "";
    $conmaterial_4  = "";
    $conmaterial_5  = "";
    $conmaterial_6  = "";
    $conmaterial_7  = "";
    $conmaterial_8  = "";
    $conmaterial_9  = "";
    $conmaterial_10 = "";
    $conmaterial_11 = "";
    $conmaterial_12 = "";
    $conmaterial_13 = "";
    $conmaterial_14 = "";
    $conmaterial_15 = "";
    $conmaterial_16 = "";
    $conmaterial_17 = "";
    $conmaterial_18 = "";
    $conmaterial_19 = "";
    $conmaterial_20 = "";
    $conmaterial_21 = "";
    $conmaterial_22 = "";
    $conmaterial_23= "";

    if($material=="1"){
        $conmaterial_1 = "checked";
    }else if($material=="2"){
        $conmaterial_2="checked";
    }else if($material=="3"){
        $conmaterial_3="checked";
    }else if($material=="4"){
        $conmaterial_4="checked";
    }else if($material=="5"){
        $conmaterial_5="checked";
    }else if($material=="6"){
        $conmaterial_6="checked";
    }else if($material=="7"){
        $conmaterial_7="checked";
    }else if($material=="8"){
        $conmaterial_8="checked";
    }else if($material=="9"){
        $conmaterial_9="checked";
    }else if($material=="10"){
        $conmaterial_10="checked";
    }else if($material=="11"){
        $conmaterial_11="checked";
    }else if($material=="12"){
        $conmaterial_12="checked";
    }else if($material=="13"){
        $conmaterial_13="checked";
    }else if($material=="14"){
        $conmaterial_14="checked";
    }else if($material=="15"){
        $conmaterial_15="checked";
    }else if($material=="16"){
        $conmaterial_16="checked";
    }else if($material=="17"){
        $conmaterial_17="checked";
    }else if($material=="18"){
        $conmaterial_18="checked";
    }else if($material=="19"){
        $conmaterial_19="checked";
    }else if($material=="20"){
        $conmaterial_20="checked";
    }else if($material=="21"){
        $conmaterial_21="checked";
    }else if($material=="22"){
        $conmaterial_22="checked";
    }else if($material=="23"){
        $conmaterial_23="checked";
    }


    if ($row_nums >= 1) {
        echo "<form id='data1' action='' method='post'>
        <input type='hidden' name='menu_name' value='" . $name_menu . "'>
        <table>      
            <tr>
                <td align='center'><label> อธิบายสั้น ๆ เกี่ยวกับเมนูนี้</label></td>
            </tr>
            <tr>
                <td align='center'><textarea id='explain' name='explain' rows='2' cols='100' placeholder='เล่าเคล็ดลับ/ที่มา #เล่าเรื่องราวความพิเศษของสูตรอาหารของคุณ' style='resize:none'  input type='text' class='form-control'>" . $detail . "</textarea></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td align='center'><label>ส่วนผสม / อุปกรณ์</label></td>
            </tr>
            <tr>
                <td align='center'><textarea id='Ingredients' name='Ingredients' rows='5' cols='100' placeholder='กรอกส่วนผสมของวัตถุดิบอาหารของคุณ' style='resize:none' input type='text' class='form-control'>" . $ingredients . "</textarea></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td align='center'><label>วิธีทำ</label></td>
            </tr>
            <tr>
                <td align='center'><textarea id='cook' name='cook' rows='5' cols='100' placeholder='กรอกวิธีทำเมนูอาหารของคุณ' style='resize:none' input type='text' class='form-control'>" . $cook . "</textarea></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td align='center'><label>หมวดหมู่อาหาร</label></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td>
                    <table border='0'>
                        <tr>
                            <td><label>ประเภทอาหาร</label></td>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='1' $confoodtype_1> น้ำพริก &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='2' $confoodtype_2> กับข้าว &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='3' $confoodtype_3> อาหารเย็น &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='4' $confoodtype_4> อาหารมังสวิรัติ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='5' $confoodtype_5> น้ำจิ้ม &nbsp;</TD>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='6' $confoodtype_6> แกง &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='7' $confoodtype_7> อาหารเด็ก &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='8' $confoodtype_8> ก๋วยเตี๋ยว &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='9' $confoodtype_9> ซุป &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='10' $confoodtype_10> มุสลิม &nbsp;</TD>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='11' $confoodtype_11> สเต็ก &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='12' $confoodtype_12> อาหารจานเดียว &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='13' $confoodtype_13> อาหารเช้า &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='14' $confoodtype_14> เบเกอร์รี่ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='15' $confoodtype_15> เครื่องดื่ม &nbsp;</TD>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='16' $confoodtype_16> สลัด &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='17' $confoodtype_17> ของหวาน &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='18' $confoodtype_18> ของว่าง &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='19' $confoodtype_19> กับแกล้ม &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='20' $confoodtype_20> คลีน &nbsp;</TD>
                        </tr>
                        <tr>
                             <TD><INPUT TYPE=radio Name=food_type VALUE='21' $confoodtype_21> ไร้แป้ง &nbsp;</TD>
                             <TD><INPUT TYPE=radio Name=food_type VALUE='22' $confoodtype_22> ไขมันต่ำ &nbsp;</TD>
                             <TD><INPUT TYPE=radio Name=food_type VALUE='23' $confoodtype_23> โปรตีน &nbsp;</TD>
                             <TD><INPUT TYPE=radio Name=food_type VALUE='24' $confoodtype_24> เมนูฟิวชั่น &nbsp;</TD>
                             <TD><INPUT TYPE=radio Name=food_type VALUE='25' $confoodtype_25> อื่นๆ &nbsp;</TD>
                        </tr>
                        <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td width='20%'><label>วัตถุดิบหลักที่ใช้</label></td>
                </tr>
                <tr>
                  <TD><INPUT TYPE=radio Name=material VALUE='1' $conmaterial_1>ขนมปัง &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='2' $conmaterial_2>กุ้ง  &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='3' $conmaterial_3>ชีส  &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='4' $conmaterial_4>ปลา  &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='5' $conmaterial_5>ปลาหมึก  &nbsp;</TD>
                </tr>
                <tr>
                  <TD><INPUT TYPE=radio Name=material VALUE='6'  $conmaterial_6>ปู &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='7'  $conmaterial_7>ผลไม้ &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='8'  $conmaterial_8>สามชั้น &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='9'  $conmaterial_9>หมู &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='10' $conmaterial_10>หอย  &nbsp;</TD>
                </tr>
                <tr>
                  <TD><INPUT TYPE=radio Name=material VALUE='11' $conmaterial_11>อกไก่  &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='12' $conmaterial_12>เต้าหู้ &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='13' $conmaterial_13>เนื้อวัว  &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='14' $conmaterial_14>เป็ด  &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='15' $conmaterial_15>เส้น  &nbsp;</TD>
                </tr>
                <tr>
                  <TD><INPUT TYPE=radio Name=material VALUE='16' $conmaterial_16>เห็ด &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='17' $conmaterial_17>แซลมอน  &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='18' $conmaterial_18>ไก่  &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='19' $conmaterial_19>ไข่  &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='20' $conmaterial_20>ไข่เค็ม  &nbsp;</TD>
                </tr>
                <tr>
                  <TD><INPUT TYPE=radio Name=material VALUE='21' $conmaterial_21>ใส้กรอก &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='22' $conmaterial_22>ผัก &nbsp;</TD>
                  <TD><INPUT TYPE=radio Name=material VALUE='23' $conmaterial_23>อื่นๆ  &nbsp;</TD>
            
                </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td width='20%'><label>วันเทศกาล/วันสำคัญ</label></td>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='1' $confastival_1> เทศกาลเจ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='2' $confastival_2> วันแม่แห่งชาติ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='3' $confastival_3> วาเลนไทน์ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='4' $confastival_4> วันคริสมาสต์ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='5' $confastival_5> วันสงกรานต์ &nbsp;</TD>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='6' $confastival_6> ตรุษจีน &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='7' $confastival_7> ฮัลโลวีน &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='8' $confastival_8> ปาร์ตี้ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='9' $confastival_9> อื่นๆ &nbsp;</TD>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><label>นานาชาติ</label></td>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=international VALUE='1' $coninternational_1> อาหารไทย &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='2' $coninternational_2> อาหารจีน &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='3' $coninternational_3> อาหารญี่ปุ่น &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='4' $coninternational_4> อาหารเวียดนาม &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='5' $coninternational_5> อาหารอิตาลี &nbsp;</TD>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=international VALUE='6' $coninternational_6> อาหารตุรกี &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='7' $coninternational_7> อาหารอินเดีย &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='8' $coninternational_8> อาหารมาเลเซีย &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='9' $coninternational_9> อาหารฟิลิปปินส์ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='10' $coninternational_10> อาหารเกาหลี &nbsp;</TD>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=international VALUE='11' $coninternational_11> อื่นๆ &nbsp;</TD>
                            
                        </tr>

                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><label>ภูมิภาคอาหาร</label></td>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=local_food VALUE='1' $conlocal_1> อาหารอีสาน &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=local_food VALUE='2' $conlocal_2> อาหาเหนือ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=local_food VALUE='3' $conlocal_3> อาหารใต้ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=local_food VALUE='4' $conlocal_4> อาหารกลาง&nbsp;</TD>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                    </table>
                </td>
            </tr>
            </table>
        </form>
        <button class='btn btn-danger' onclick='delete_menu_submit()'>ลบสูตรอาหาร</button>
        ";
    } else {
        echo "ไม่มีข้อมูล";
    }
} else {
    echo "กรุณากรอกชื่อเมนูอาหาร";
}