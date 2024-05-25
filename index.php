<?php
// กำหนดลิงก์ที่ต้องการ
$facebookLink = "https://www.facebook.com/DigitalTwinEng/";
$lineLink = "https://line.me/R/ti/p/@dth7419a?oat_content=url";
$flexsimLink = "https://www.flexsim.com/";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clickable Buttons</title>
    <!-- เรียกใช้ Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- เรียกใช้ Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;

            margin: 0;
        }

        .container {
            text-align: center;
        }

        .company-name {
            font-size: 36px;
            margin-top: 50px;
        }

        table {
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
        }

        table td {
            padding: 5px;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            font-size: 5px;
            color: #fff;
            text-decoration: none;
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }

        .btn i {
            font-size: 24px;
        }

        #facebook-btn {
            background-color: #3b5998;
        }

        #facebook-btn:hover {
            background-color: #99ccff;
        }

        #line-btn {
            background-color: #00b900;
        }

        #line-btn:hover {
            background-color: #ffff4d;
        }

        #flexsim-btn {
            background-color: #0039e6;
        }

        #flexsim-btn:hover {
            background-color: #e60000;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .btn img {
            width: 30px;
            /* ปรับขนาดตามที่ต้องการ */
            height: auto;
            /* ทำให้สูงขึ้นหรือลดลงตามอัตราส่วน */
        }
    </style>
</head>

<body>

    <div class="container">

        <h1 class="company-name">FlexSim Software</h1>
        <br>
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-sm-7 text-left">
                    <p>
                        FlexSim เป็นบริษัทที่มีเสน่ห์ทางเทคโนโลยีและนวัตกรรมที่ช่วยให้ธุรกิจและองค์กรในหลายอุตสาหกรรมสามารถวางแผน จำลอง และปรับปรุงกระบวนการต่าง ๆ ได้อย่างมีประสิทธิภาพและเชื่อถือได้ เพื่อให้สามารถตอบสนองต่อเปลี่ยนแปลงและท้าทายในสภาพแวดล้อมธุรกิจได้ดียิ่งขึ้น
                        FlexSim พัฒนาซอฟต์แวร์แบบจำลองการจำลอง (Simulation Software) ที่เป็นเครื่องมือที่มีประสิทธิภาพสำหรับการจำลองและวิเคราะห์การทำงานของระบบต่าง ๆ ได้อย่างละเอียดและสมจริง เช่น การจำลองกระบวนการผลิตในโรงงาน การบริหารจัดการการบริการในธุรกิจ หรือการจำลองการเดินเครื่องในสนามบิน โดยมีเป้าหมายในการช่วยลดความเสี่ยงและต้นทุน และเพิ่มประสิทธิภาพในการดำเนินธุรกิจ
                        นอกจากนี้ ผลิตภัณฑ์ของ FlexSim ยังมีความยืดหยุ่นสูง ทำให้สามารถปรับแต่งตามความต้องการของลูกค้าได้โดยทั่วไป ทำให้เหมาะสมกับการใช้งานในหลายอุตสาหกรรม เช่น อุตสาหกรรมผลิต โรงงาน การบริหารจัดการการเดินเครื่อง การบริหารจัดการการบริการ และอื่น ๆ อีกมาก
                        สุดท้าย ความเชื่อของ FlexSim คือการทำให้โลกของการจำลองและการจำลองการทำงานเป็นเรื่องง่ายและเข้าถึงได้สำหรับทุกคน ไม่ว่าจะเป็นผู้เชี่ยวชาญในด้านการจำลองหรือไม่ ทำให้การใช้งานซอฟต์แวร์เป็นเรื่องน่าสนใจและมีประโยชน์ในการตัดสินใจทางธุรกิจและการวางแผนในองค์กรต่าง ๆ ของท่านได้อย่างมีประสิทธิภาพและเชื่อถือได้ นั่นเป็นสิ่งที่ FlexSim มุ่งมั่นที่จะทำตลาด
                    </p>
                </div>
                <div class="col-sm-5">
                    <img src="pic/flexsim.jpg" alt="FlexSim Image" class="img-fluid rounded">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <table>
                        ช่องทางการติดต่อหรือข้อมูลเพิ่มเติม
                        <td>
                            <a href="<?php echo $facebookLink; ?>" class="btn" id="facebook-btn">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo $lineLink; ?>" class="btn" id="line-btn">
                                <i class="fab fa-line"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo $flexsimLink; ?>" class="btn" id="flexsim-btn">
                                <img src="pic/9.png" alt="FlexSim Logo" width="10" height="15">
                            </a>
                        </td>
                    </table>
                </div>
            </div>
        </div>

    </div>

</body>

</html>