<?php 
    include "connect.php";
    $stmt = $pdo->prepare("SELECT * FROM user");
    $stmt->execute();
    while($row = $stmt->fetch()){
        echo '
            <div class="section">
                <ul>
                    <li>
                        <div class="boxUserList">
                            <div class="box">
                                <a href="user.php?username='.$row["username"].'">
                                    <img src="images/userpicture.png" alt="Img" height="94" width="90">
                                </a>
                            </div>
                            <p>
                                Firstname: '.$row["firstname"].'<br>
                                Lastname: '.$row["lastname"].'<br>
                                Email: '.$row["email"].'
                                <a class="more" href="user.php?username='.$row["username"].'">ตรวจสอบ</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            ';
        
    }
?>