<html>

<head>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <p class="l1">Digital Assignment - 4</p>
    <p class="l2">Name: Vishnu Nair</p>
    <p class="l3">Registeration No. : 19BCE2467</p>
    <br>
    <hr>
    <hr>
    <br>
    <form action="" method="post">
        <h2> Cat 1 </h2>
        DSA
        <br>
        <input type=text name="t1"><br>
        <br>
        IWP
        <br>
        <input type=text name="t2"><br>
        <br>
        Java
        <br>
        <input type=text name="t3"><br>
        <br>
        Operating Systems
        <br>
        <input type=text name="t4"><br>
        <br>
        DBMS
        <br>
        <input type=text name="t5"><br>
        <br>
        <hr>
        <h2> Cat 2 </h2>
        DSA
        <br>
        <input type=text name="a1"><br>
        <br>
        IWP
        <br>
        <input type=text name="a2"><br>
        <br>
        Java
        <br>
        <input type=text name="a3"><br>
        <br>
        Operating Systems
        <br>
        <input type=text name="a4"><br>
        <br>
        DBMS
        <br>
        <input type=text name="a5"><br>
        <br>
        <hr>
        <h2> DA - 1 </h2>
        DSA
        <br>
        <input type=text name="d1"><br>
        <br>
        IWP
        <br>
        <input type=text name="d2"><br>
        <br>
        Java
        <br>
        <input type=text name="d3"><br>
        <br>
        Operating Systems
        <br>
        <input type=text name="d4"><br>
        <br>
        DBMS
        <br>
        <input type=text name="d5"><br>
        <br>
        <hr>
        <h2> DA - 2 </h2>
        DSA
        <br>
        <input type=text name="da1"><br>
        <br>
        IWP
        <br>
        <input type=text name="da2"><br>
        <br>
        Java
        <br>
        <input type=text name="da3"><br>
        <br>
        Operating Systems
        <br>
        <input type=text name="da4"><br>
        <br>
        DBMS
        <br>
        <input type=text name="da5"><br>
        <br>
        <hr>
        <h2> Quiz </h2>
        DSA
        <br>
        <input type=text name="q1"><br>
        <br>
        IWP
        <br>
        <input type=text name="q2"><br>
        <br>
        Java
        <br>
        <input type=text name="q3"><br>
        <br>
        Operating Systems
        <br>
        <input type=text name="q4"><br>
        <br>
        DBMS
        <br>
        <input type=text name="q5"><br>
        <br>
        <input class="input-submit" type=submit name="s" value="Result">
        <br>
        <br>
        <div class="answer">
            <?php
            if (isset($_POST['s'])) {
                echo "<h3> Cat 1 marks </h3>";
                $aa0 = $_POST['t1'];
                $aa1 = $_POST['t2'];
                $aa2 = $_POST['t3'];
                $aa3 = $_POST['t4'];
                $aa4 = $_POST['t5'];
                if (
                    ($aa0 > 30 & $aa0 < 0) || ($aa1 > 30 && $aa1 < 0) || ($aa2 > 30 && $aa2 < 0) || ($aa3 > 30 && $aa3 < 0) || ($aa4 > 30 &&
                        $aa4 < 0)
                )
                    echo "Invalid marks. Please enter valid marks(0-30).";
                if (
                    $aa0 < 15 || $aa1 < 15 || $aa2 < 15 || $aa3 < 15 ||
                    $aa4 < 15
                )
                    echo "Do slow learners assignment.";
                echo "<h3> Cat 2 marks </h3>";
                $ab0 = $_POST['a1'];
                $ab1 = $_POST['a2'];
                $ab2 = $_POST['a3'];
                $ab3 = $_POST['a4'];
                $ab4 = $_POST['a5'];
                if (
                    ($ab0 > 30 & $ab0 < 0) || ($ab1 > 30 && $ab1 < 0) || ($ab2 > 30 && $ab2 < 0) || ($ab3 > 30 && $ab3 < 0) || ($ab4 > 30 &&
                        $ab4 < 0)
                )
                    echo "Invalid marks. Please enter valid marks(0-30).";
                if (
                    $ab0 < 15 || $ab1 < 15 || $ab2 < 15 || $ab3 < 15 ||
                    $ab4 < 15
                )
                    echo "Do slow learners assignment.";
                echo "<h3> DA 1 marks </h3>";
                $ac0 = $_POST['d1'];
                $ac1 = $_POST['d2'];
                $ac2 = $_POST['d3'];
                $ac3 = $_POST['d4'];
                $ac4 = $_POST['d5'];
                if (
                    ($ac0 > 30 & $ac0 < 0) || ($ac1 > 30 && $ac1 < 0) || ($ac2 > 30 && $ac2 < 0) || ($ac3 > 30 && $ac3 < 0) || ($ac4 > 30 &&
                        $ac4 < 0)
                )
                    echo "Invalid marks. Please enter valid marks(0-30).";
                if (
                    $ac0 < 15 || $ac1 < 15 || $ac2 < 15 || $ac3 < 15 ||
                    $ac4 < 15
                )
                    echo "Do slow learners assignment.";
                echo "<h3> DA 2 marks </h3>";
                $ad0 = $_POST['da1'];
                $ad1 = $_POST['da2'];
                $ad2 = $_POST['da3'];
                $ad3 = $_POST['da4'];
                $ad4 = $_POST['da5'];
                if (
                    ($ad0 > 30 & $ad0 < 0) || ($ad1 > 30 && $ad1 < 0) || ($ad2 > 30 && $ad2 < 0) || ($ad3 > 30 && $ad3 < 0) || ($ad4 > 30 &&
                        $ad4 < 0)
                )
                    echo "Invalid marks. Please enter valid marks(0-30).";
                if (
                    $ad0 < 15 || $ad1 < 15 || $ad2 < 15 || $ad3 < 15 ||
                    $ad4 < 15
                )
                    echo "Do slow learners assignment.";
                echo "<h3> Quiz marks </h3>";
                $ae0 = $_POST['q1'];
                $ae1 = $_POST['q2'];
                $ae2 = $_POST['q3'];
                $ae3 = $_POST['q4'];
                $ae4 = $_POST['q5'];
                if (
                    ($ae0 > 30 & $ae0 < 0) || ($ae1 > 30 && $ae1 < 0) || ($ae2 > 30 && $ae2 < 0) || ($ae3 > 30 && $ae3 < 0) || ($ae4 > 30 &&
                        $ae4 < 0)
                )
                    echo "Invalid marks. Please enter valid marks(0-30).";
                if (
                    $ae0 < 15 || $ae1 < 15 || $ae2 < 15 || $ae3 < 15 ||
                    $ae4 < 15
                ) {
                    echo "Do slow learners assignment.";
                }
                echo "<br>";
                echo "<br>";
                $sum0 = 0.5 * $aa0 + 0.5 * $ab0 + $ac0 + $ad0 + $ae0;
                $sum1 = 0.5 * $aa1 + 0.5 * $ab1 + $ac1 + $ad1 + $ae1;
                $sum2 = 0.5 * $aa2 + 0.5 * $ab2 + $ac2 + $ad2 + $ae2;
                $sum3 = 0.5 * $aa3 + 0.5 * $ab3 + $ac3 + $ad3 + $ae3;
                $sum4 = 0.5 * $aa4 + 0.5 * $ab4 + $ac4 + $ad4 + $ae4;
                $avg0 = $sum0 / 5;
                if ($avg0 > 27) {
                    $grade0 = "S";
                    $gpa0 = "10";
                }
                if ($avg0 > 24 && $avg0 <= 27) {
                    $grade0 = "A";
                    $gpa0 = "9";
                }
                if ($avg0 > 21 && $avg0 <= 24) {
                    $grade0 = "B";
                    $gpa0 = "8";
                }
                if ($avg0 > 18 && $avg0 <= 21) {
                    $grade0 = "C";
                    $gpa0 = "7";
                }
                if ($avg0 > 15 && $avg0 <= 18) {
                    $grade0 = "D";
                    $gpa0 = "6";
                }
                if ($avg0 <= 15) {
                    $grade0 = "F";
                    $gpa0 = "5";
                }
                $avg1 = $sum1 / 5;
                if ($avg1 > 27) {
                    $grade1 = "S";
                    $gpa1 = "10";
                }
                if ($avg1 > 24 && $avg1 <= 27) {
                    $grade1 = "A";
                    $gpa1 = "9";
                }
                if ($avg1 > 21 && $avg1 <= 24) {
                    $grade1 = "B";
                    $gpa1 = "8";
                }
                if ($avg1 > 18 && $avg1 <= 21) {
                    $grade1 = "C";
                    $gpa1 = "7";
                }
                if ($avg1 > 15 && $avg1 <= 18) {
                    $grade1 = "D";
                    $gpa1 = "6";
                }
                if ($avg1 <= 15) {
                    $grade1 = "F";
                    $gpa1 = "5";
                }
                $avg2 = $sum2 / 5;
                if ($avg2 > 27) {
                    $grade2 = "S";
                    $gpa2 = "10";
                }
                if ($avg2 > 24 && $avg2 <= 27) {
                    $grade2 = "A";
                    $gpa2 = "9";
                }
                if ($avg2 > 21 && $avg2 <= 24) {
                    $grade2 = "B";
                    $gpa2 = "8";
                }
                if ($avg2 > 18 && $avg2 <= 21) {
                    $grade2 = "C";
                    $gpa2 = "7";
                }
                if ($avg2 > 15 && $avg2 <= 18) {
                    $grade2 = "D";
                    $gpa2 = "6";
                }
                if ($avg2 <= 15) {
                    $grade2 = "F";
                    $gpa2 = "5";
                }
                $avg3 = $sum3 / 5;
                if ($avg3 > 27) {
                    $grade3 = "S";
                    $gpa3 = "10";
                }
                if ($avg3 > 24 && $avg3 <= 27) {
                    $grade3 = "A";
                    $gpa3 = "9";
                }
                if ($avg3 > 21 && $avg3 <= 24) {
                    $grade3 = "B";
                    $gpa3 = "8";
                }
                if ($avg3 > 18 && $avg3 <= 21) {
                    $grade3 = "C";
                    $gpa3 = "7";
                }
                if ($avg3 > 15 && $avg3 <= 18) {
                    $grade3 = "D";
                    $gpa3 = "6";
                }
                if ($avg3 <= 15) {
                    $grade3 = "F";
                    $gpa3 = "5";
                }
                $avg4 = $sum4 / 5;
                if ($avg4 > 27) {
                    $grade4 = "S";
                    $gpa4 = "10";
                }
                if ($avg4 > 24 && $avg4 <= 27) {
                    $grade4 = "A";
                    $gpa4 = "9";
                }
                if ($avg4 > 21 && $avg4 <= 24) {
                    $grade4 = "B";
                    $gpa4 = "8";
                }
                if ($avg4 > 18 && $avg4 <= 21) {
                    $grade4 = "C";
                    $gpa4 = "7";
                }
                if ($avg4 > 15 && $avg4 <= 18) {
                    $grade4 = "D";
                    $gpa4 = "6";
                }
                if ($avg4 <= 15) {
                    $grade4 = "F";
                    $gpa4 = "5";
                }
            }
            ?>
    </form>
    </div>
    <div class="tab">
        <table>
            <tr>
                <th>Subject</th>
                <th>Cat 1</th>
                <th>Cat 2</th>
                <th>DA 1</th>
                <th>DA 2</th>
                <th>Quiz</th>
                <th>Grade</th>
                <th>GPA</th>
            </tr>
            <tr>
                <?php
                echo "<th>DSA</th>";
                echo "<td>$aa0</td>";
                echo "<td>$ab0</td>";
                echo "<td>$ac0</td>";
                echo "<td>$ad0</td>";
                echo "<td>$ae0</td>";
                echo "<td>$grade0</td>";
                echo "<td>$gpa0</td>";
                ?>
            </tr>
            <tr>
                <?php
                echo "<th>IWP</th>";
                echo "<td>$aa1</td>";
                echo "<td>$ab1</td>";
                echo "<td>$ac1</td>";
                echo "<td>$ad1</td>";
                echo "<td>$ae1</td>";
                echo "<td>$grade1</td>";
                echo "<td>$gpa1</td>";
                ?>
            </tr>
            <tr>
                <?php
                echo "<th>OS</th>";
                echo "<td>$aa2</td>";
                echo "<td>$ab2</td>";
                echo "<td>$ac2</td>";
                echo "<td>$ad2</td>";
                echo "<td>$ae2</td>";
                echo "<td>$grade2</td>";
                echo "<td>$gpa2</td>";
                ?>
            </tr>
            <tr>
                <?php
                echo "<th>Java</th>";
                echo "<td>$aa3</td>";
                echo "<td>$ab3</td>";
                echo "<td>$ac3</td>";
                echo "<td>$ad3</td>";
                echo "<td>$ae3</td>";
                echo "<td>$grade3</td>";
                echo "<td>$gpa3</td>";
                ?>
            </tr>
            <tr>
                <?php
                echo "<th>DBMS</th>";
                echo "<td>$aa4</td>";
                echo "<td>$ab4</td>";
                echo "<td>$ac4</td>";
                echo "<td>$ad4</td>";
                echo "<td>$ae4</td>";
                echo "<td>$grade4</td>";
                echo "<td>$gpa4</td>";
                ?>
            </tr>
        </table>
    </div>
</body>

</html>