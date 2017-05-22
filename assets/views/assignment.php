    <main class="container">
      <h1><center><div>Assignment</div></center></h1>

      <div class="jumbotron">
        <h1><center>Reading Passage</center></h1>
        <p>
          Puppy kitty ipsum dolor sit good dog . Drool scratcher toys harness bird seed barky food collar vitamins bird birds walk. Cage litter box Rover Fido licks bird seed biscuit purr cage meow parakeet small animals warm stick. Vitamins fish cage wet nose kitty maine coon cat kitten pet gate cage mouse Rover biscuit lick biscuit polydactyl. Paws brush collar birds kisses head lazy dog vaccine maine coon cat pet birds puppy scratch puppy chirp chow pet supplies small animals field. Fleas behavior groom twine walk tail parakeet canary slobber dinnertime crate paws Mittens tooth Mittens yawn lol catz turtle parrot dog. Vaccination tooth dog hamster heel fleas stay purr behavior wagging tongue treats Rover mouse bird seed. Speak canary feeder chirp aquarium biscuit slobbery play dead barky fish pet gate parakeet tabby scratch collar Mittens food canary brush. Tuxedo throw shake canary parakeet wag tail vaccination bedding aquarium string turtle litter box collar licks groom tail cat leash.Pet gimme five slobber commands leash running leash cockatiel Rover aquatic. Collar ball whiskers stripes cage Spike fleas purr ball dog bedding Buddy pet supplies Spike stripes bird food leash tuxedo Tigger head. Treats puppy gimme five stay scratch vaccine play dead slobbery barky. Running pet supplies bark dog house treats Buddy vaccine meow paws dog house lick maine coon cat window Scooby snacks. Good Boy Buddy lol catz pet supplies parrot ferret small animals vaccine gimme five licks. Aquatic parrot toys collar slobber bird food vaccine head left paw small animals lazy cat ball. Meow scratch warm Scooby snacks fleas paws.Kibble fleas walk carrier walk shake warm twine chew fur lol catz nest run fast right paw barky smooshy cage left paw pet warm. Fetch wag tail tail house train licks finch. Cage ID tag sit vaccination pet gate cockatiel. Polydactyl left paw birds purr fur puppy bird seed foot tail critters. Turtle biscuit bedding stay pet supplies cat ferret pet food heel. Good Boy walk run small animals twine tabby water dog house train Snowball field teeth commands teeth fish kibble. Head stripes teeth critters Spike slobber fleas maine coon cat running. Kibble ball roll over Snowball wag tail string wagging licks tongue toy meow twine bark good boy teeth play twine Mittens. Park bark aquatic kitten chirp dinnertime Tigger. Catch slobber furry feeder dragging fluffy foot Snowball lol catz Mittens meow tuxedo.Lazy Dog fluffy parrot food bedding toy nest lick. Spike litter smooshy tuxedo Snowball tongue cage ball aquarium small animals furry chirp pet food chew small animals. Yawn tooth Spike bed drool canary teeth pet supplies. Licks speak pet gate stick kitten tooth commands Tigger turtle cage right paw carrier head litter box teeth fish whiskers. Shake pet gate Tigger stripes groom throw scratch feathers. Scratcher biscuit house train Spike chow pet supplies behavior paws slobber. House Train chirp kitty bed commands pet kisses teeth window. Toy commands field shake kibble tail small animals pet kisses tuxedo paws tail harness running lazy cat pet food. Rover water tuxedo Buddy walk cage good boy paws turtle shake play dead kibble Tigger ID tag nest meow window cat roll over dinnertime. Mouse small animals crate dinnertime run barky throw good boy.Birds right paw play dead harness teeth maine coon cat gimme five head dog house vaccination catch. Biscuit walk tuxedo lazy dog carrier toy walk window tongue running food kisses slobber feeder tooth meow. Mittens kibble parakeet dinnertime water gimme five tail chow throw litter collar fluffy aquatic licks swimming whiskers Mittens throw. Mittens park pet supplies maine coon cat shake ID tag good boy wag tail birds lick turtle cockatiel Scooby snacks. Lick swimming cage carrier biscuit swimming wagging paws critters vitamins. Aquatic dog house lazy dog hamster bark paws swimming polydactyl park smooshy kibble bird seed aquarium wag tail turtle. ID Tag leash tongue lazy dog chew grooming finch twine nest play dead licks tail slobbery puppy dog house licks aquatic wagging. Carrier pet wagging pet vitamins dog house ball walk scratcher cockatiel head treats furry bird food stay window kibble. Sit stay wag tail fur bird food dog house nap heel foot right paw Buddy cockatiel.
        <p>
        <input type="button" name="answer" value="Take Quiz" onclick="showDiv()">
      </div>

<div id="welcomeDiv"  style="display:none;" class="answer_list" >
      <h1>Quiz</h1>
      <form method="post" id="quiz">
        <div class="form-group">
          <label for="question1">CSS Stands for ____ ?</label>
          <div><input type="text" name="question-1-answers" id="question-1-answers-A" value="" /></div>
        </div>
        <!--
        <div class="form-group">
          <label for="question2">Internet Explorer 6 was released in ____ ?</label>
          <div><input type="text" name="question-2-answers" id="question-2-answers-A" value="" /></div>
        </div>
        <div class="form-group">
          <label for="question3">SEO stands for ____ ?</label>
          <div><input type="text" name="question-3-answers" id="question-3-answers-C" value="" /></div>
        </div>
        <div class="form-group">
          <label for="question4">What does HTML mean ____ ?</label>
           <div><input type="text" name="question-4-answers" id="question-4-answers-A" value="" /></div>
        </div>
        <div class="form-group">
          <label for="question5">Hello!</label>
           <div><input type="text" name="question-5-answers" id="question-5-answers-A" value="" /></div>
        </div> -->
        <button type="submit" value="Submit Quiz" class="btn btn-default">Submit</button>
      </form>
      <br><br>
      <?php

          $answer1 = $_POST['question-1-answers'];
      //    $answer2 = $_POST['question-2-answers'];
      //    $answer3 = $_POST['question-3-answers'];
    //      $answer4 = $_POST['question-4-answers'];
    //      $answer5 = $_POST['question-5-answers'];

          $totalCorrect = 0;

          if ($answer1 == "Cascading Style Sheets" ) { $totalCorrect++; }
    //      if ($answer2 == "2001") { $totalCorrect++; }
    //      if ($answer3 == "Search Engine Optimization") { $totalCorrect++; }
    //      if ($answer4 == "Hypertext Markup Language") { $totalCorrect++; }
      //    if ($answer5 == "Hello") { $totalCorrect++; }

          echo "<div id='results'><h2>You got $totalCorrect / 1 correct</h2></div>";



      ?>
</div>
  <br><br>
  <script>
  function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}
</script>
    </main>
