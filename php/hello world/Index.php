/*
Welcome to our Massive Open Online Course to course-style features
of this web site.
hello world in phpstorm this is fucking cool
As you go through the Lessons in the course you now will see additional links to the in the class. You can
attempt the and get a score.
You can track your progress through the course using group of assignments,
you can earn a Badge. You can download these badges and ho on this site.pand secret
to launch the from your LMS.
This site uses framework to embed a learning management system into this site and handle the . If you
are interested in c website.
*/

<p>form test</p>
<form method="post">
  <label for="name">your name</label>
  <input type="text" value="<?= $_POST['name'] ?>" name="name" id="name">
  <br>
  <br>
  <label for="number">phone number</label>
  <input type="number" name="number" id="number">
  <button>submit</button>
  <script>
    let input = document.getElementById("name");
    console.log(input.value);

  </script>
</form>
<pre>

  <?php
  print_r($_POST);

  ?>
</pre>