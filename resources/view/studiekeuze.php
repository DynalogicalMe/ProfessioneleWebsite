<p>De juiste studie kiezen is niet makkelijk. Wij van Mondriaan Hogeschool hebben hiervoor een studiekeuze check gemaakt.
Met behulp van deze vragenlijst kunnen wij een advies geven welke studie het beste bij jou past.</p>

<?php
    $question1 = $question2 = $question3 = "";
    $question1Err = $question2Err = $question3Err = "";
    if ($_SERVER["REQUEST_METHOD"] =="POST") {
        if (empty($_POST["question1"])) {
            $question1Err = "* Je moet een keuze maken";
        } else {
            $question1 = $_POST["question1"];
        }
        if (empty($_POST["question2"])) {
            $question2Err = "* Je moet een keuze maken";
        } else {
            $question2 = $_POST["question2"];
        }
        if (empty($_POST["question3"])) {
            $question3Err = "* Je moet een keuze maken";
        } else {
            $question3 = $_POST["question3"];
        }
    }
    
?>

<form method="post" action="studiekeuze">
    Vraag 1: Ben je ge&iuml;nteresseerd in een exacte of een creatieve opleiding?<br>
    <input type="radio" name="question1" <?php if (isset($question1) && $question1=="A") echo "checked";?> value="A">A: Exact<br>
    <input type="radio" name="question1" <?php if (isset($question1) && $question1=="B") echo "checked";?> value="B">B: Creatief<br>
    <span class="error"> <?php echo $question1Err;?></span>
    <br>
    Vraag 2: Wil je tijdens je studie meer uit boeken of van de praktijk leren?<br>
    <input type="radio" name="question2" <?php if (isset($question2) && $question2=="A") echo "checked";?> value="A">A: Boeken<br>
    <input type="radio" name="question2" <?php if (isset($question2) && $question2=="B") echo "checked";?> value="B">B: Praktijk<br>
    <span class="error"> <?php echo $question2Err;?></span>
    <br>
    Vraag 3: Bespeel je een muziekinstrument<br>
    <input type="radio" name="question3" <?php if (isset($question3) && $question3=="A") echo "checked";?> value="A">A: Nee<br>
    <input type="radio" name="question3" <?php if (isset($question3) && $question3=="B") echo "checked";?> value="B">B: Ja<br>
    <span class="error"> <?php echo $question3Err;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
    $choice = 0;
    if ($question1 == "A"){
         $choice = $choice + 1;
    }
    if ($question2 == "A"){
         $choice = $choice + 1;
    }
    if ($question3 == "A"){
         $choice = $choice + 1;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Jouw antworden</h2>";
        echo "Vraag 1: " . $question1 . "<br>";
        echo "Vraag 2: " . $question2 . "<br>";
        echo "Vraag 3: " . $question3 . "<br>";
        echo "Met deze resultaten is voor jou de beste opleiding: ";
        if ($choice >= 2){
            echo "Economie.";
        } else{
            echo "Muziek.";
        }
    }
                   
?>
<br><br>