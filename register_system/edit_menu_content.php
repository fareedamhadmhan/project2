<?php
include '../connect.php';

$name_menu = $_POST["manu_name"];

if (!empty($name_menu)) {

    $sql        = "SELECT * FROM menu WHERE menu_name='$name_menu' ";
    $result     =   @$con->query($sql);
    $row        = $result->fetch_assoc();
    $row_nums   = $result->num_rows;

    $detail             = $row["detail"];
    $people             = $row["for_people"];
    $ingredients        = $row["Ingredients"];
    $cook               = $row["cook"];
    $food_type          = $row["food_type"];
    $fastival           = $row["fastival"];
    $international      = $row["international"];
    $local_food         = $row["local_food"];


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
                <td align='center'><label>สำหรับ</label></td>
            </tr>
            <tr>
                <td align='center'><textarea id='number_p' name='number_p' rows='1' cols='100' placeholder='กี่คน' style='resize:none'  input type='text'  class='form-control'>" . $people . "</textarea></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td align='center'><label>ส่วนผสม / อุปกรณ์</label></td>
            </tr>
            <tr>
                <td align='center'><textarea id='Ingredients' name='Ingredients' rows='2' cols='100' placeholder='กรอกส่วนผสมของวัตถุดิบอาหารของคุณ' style='resize:none' input type='text' class='form-control'>" . $ingredients . "</textarea></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td align='center'><label>วิธีทำ</label></td>
            </tr>
            <tr>
                <td align='center'><textarea id='cook' name='cook' rows='2' cols='100' placeholder='กรอกวิธีทำเมนูอาหารของคุณ' style='resize:none' input type='text' class='form-control'>" . $cook . "</textarea></td>
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
                            <TD><INPUT TYPE=radio Name=food_type VALUE='1'> น้ำพริก &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='2'> กับข้าว &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='3'> อาหารเย็น &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='4'> อาหารมังสวิรัติ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='5'> น้ำจิ้ม &nbsp;</TD>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='6'> แกง &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='7'> อาหารเด็ก &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='8'> ก๋วยเตี๋ยว &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='9'> ซุป &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='10'> มุสลิม &nbsp;</TD>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='11'> สเต็ก &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='12'> อาหารจานเดียว &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='13'> อาหารเช้า &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='14'> เบเกอร์รี่ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='15'> เครื่องดื่ม &nbsp;</TD>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='16'> สลัด &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='17'> ของหวาน &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='18'> ของว่าง &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='19'> กับแกล้ม &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=food_type VALUE='20'> คลีน &nbsp;</TD>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td width='20%'><label>วันเทศกาล/วันสำคัญ</label></td>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='1'> เทศกาลเจ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='2'> วันแม่แห่งชาติ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='3'> วาเลนไทน์ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='4'> วันคริสมาสต์ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='5'> วันสงกรานต์ &nbsp;</TD>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='6'> ตรุษจีน &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='7'> ฮัลโลวีน &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='8'> ปาร์ตี้ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=fastival VALUE='9'> อื่นๆ &nbsp;</TD>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><label>นานาชาติ</label></td>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=international VALUE='1'> อาหารไทย &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='2'> อาหารจีน &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='3'> อาหารญี่ปุ่น &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='4'> อาหารเวียดนาม &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='5'> อาหารอิตาลี &nbsp;</TD>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=international VALUE='6'> อาหารตุรกี &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='7'> อาหารอินเดีย &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='8'> อาหารมาเลเซีย &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='9'> อาหารฟิลิปปินส์ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=international VALUE='10'> อาหารเกาหลี &nbsp;</TD>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=international VALUE='6'> อื่นๆ &nbsp;</TD>
                        </tr>

                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><label>ภูมิภาคอาหาร</label></td>
                        </tr>
                        <tr>
                            <TD><INPUT TYPE=radio Name=local_food VALUE='1'> อาหารอีสาน &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=local_food VALUE='2'> อาหาเหนือ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=local_food VALUE='3'> อาหารใต้ &nbsp;</TD>
                            <TD><INPUT TYPE=radio Name=local_food VALUE='4'> อาหารกลาง&nbsp;</TD>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                    </table>
                </td>
            </tr>
            </table>
        </form>
        <button class='btn btn-warning' onclick='edit_menu_submit()'>แก้ไขข้อมูล</button>
        ";
    } else {
        echo "ไม่มีข้อมูล";
    }
} else {
    echo "กรุณากรอกชื่อเมนูอาหาร";
}
