<center>
	<!-- container -->
	<div class="container">

		<!-- Heading -->
		<div class="row" style="padding-top:30px">
			<div class="twelve columns">


				<div class="six columns">
				</div>
			</div>
		<hr />
		</div>
		<!-- End Heading -->

		<div class="row">
			<h4 style="color:#555;">Create a quiz</h4>
			<div class="row" style="padding-top:30px">
				<!-- Begin creation form-->

				<div class="twelve columns">
					<form action="CreateServlet" method="post" id="create-container" name="create-editor" >
					<label for="quiz-name">Quiz Name (required)</label>
					<input id="quiz-name" name="quiz-name" type="text" placeholder=""/><br/><br/>
					<input id="num-questions" name="num-questions" type="hidden" value="1"/>
					<br/><br/>
					<h5>Options</h5>
					Specify some options for your quiz.
					<!--
					Quiz Options:
						////////////////////////////////////////////////////////
						Different options for the quiz in general.
						Field names:
						///////////////////////////////////////////////////////
						"quiz-display" 				: should be flash-card or one page?
						possible values 			: {"one", "multiple"}

						"immediate-correction" 		: should give user immediate feedback?
						possible values 			: {"Yes", "No"}

						"order"						: randomize order?
						possible values 			: {"Yes", "No"}

					-->
					<h6>Category</h6>
					<select name="quiz-category">
						<option value="general">General</option>
						<option value="science">Science and Technology</option>
						<option value="trivia">Trivia</option>
						<option value="social">Social</option>
						<option value="educational">Educational</option>
					</select><br/>

					<h6>Tags: Tags are keywords that identify your quiz, separated by commas.<br/>
					(e.g. myNiceTag1, myNicetag2, myNiceTag3, etc...)</h6>
					<input type="text" name="quiz-tags" placeholder="#Tag1, #Tag2" /><br/>
					<br/>

					<h6>Description: Give a nice description for your quiz, instructions, etc... </h6>
					<textarea placeholder="Attention!" name="quiz-description" rows="3"></textarea>
					<br/>

					<h6>Quiz Display</h6>
					<select name="quiz-display">
						<option value="one">One Page</option>
						<option value="multiple">Multiple Pages</option>
					</select><br/>

					<h6>Allow immediate feedback</h6>
					<select name="immediate-correction">
						<option value="yes">Yes</option>
						<option value="no">No</option>
					</select>
					<br/>

					<h6>Randomize question order</h6>
					<select name="order">
						<option value="yes">Yes</option>
						<option value="no">No</option>
					</select>
					<br/><br/>

					<!--
					Questions Section
						////////////////////////////////////////////////////////
						Each question module starts off as giving the user a list
						of possible selections of menus
						///////////////////////////////////////////////////////

						Based on the kind of question, here are various
						fields to look for when receiving data about a certain
						question.
						(Note that all question fields' last character indicates
						the question number).

						"num-questions:"        : the number of questions
						possible values         : an integer

						"question-type-N"		: the question type
						possible values 		: {0 = no selection, ignore
												   "question-response"
												   "fill-in-the-blank"
												   (see <option>'s value field below)
												   ...
											      }

						"question-N" 			: the question
						possible value			: text of any size

						"answer-N"				: answer corresponding to question-N
						possible values			: text of any size

						NOTE: for multiple choice or multiple answer questions, can have
								many "answer-N" fields. Make sure you get them all.
								Java Servlet requests should return a getParameterValues() array
								which allows you to iterate through and get all values
								of that field.

						"timed-N"				: whether the N-th question should be timed
						possible values			: "on" or doesn't exist

						"time-limit-N"			: the time limit for the Nth question
						possible values			: a number represented as a string

					-->

					<!-- ///////////////////////////// Begin Creation Form ////////////////////////////////// -->
					<br/>
					<h5>Questions Section</h5><br/><br/>
					<div>
						<div id="question-1">
							<h6 class="label close-question" >Question 1 <a style="font-size:16px;">&times;</a></h6><br/>
							<select class="question-block red" id="question-type-1" name="question-type-1">
								  <option value="0" selected></option>
								  <option value="question-response">Question-Response</option>
								  <option value="fill-in-the-blank">Fill-in-the-Blank</option>
								  <option value="multi-answer">Multiple Answer</option>
								  <option value="multiple-choice">Multiple Choice</option>
								  <option value="picture-response">Picture-Response</option>
								  <option value="multiple-choice-multiple-answer">Multi-Choice-Multi-Answer</option>
								  <option value="matching">Matching</option>
								  <option value="auto-generated">Auto-Generated</option>
								  <option value="graded-question">Graded Question</option>
							</select>
							<div id="question-block-1">
							</div>

							<br/><br/><!-- Divider between questions -->
						</div>
					</div>


					<div id="more-questions" style="max-width:200px; cursor:pointer;"><a>[+] Add a Question</a></div>
					<br/><br/><!-- Divider between questions -->

					<!-- Submit button -->
					<input type="submit" style="margin-top:20px" class="small button" id="generate-editor" value="Generate Quiz" />
					</form>
				</div>
				<!-- ///////////////////////////////  end creation form /////////////////////////////////// -->




				<!--
					////////////////////////////////////////////////////////////////////////////
					HIDDEN FORMS:
					Not used for actual forms, but just here so we can dynamically
					generate form content when the user selects a question type.
					////////////////////////////////////////////////////////////////////////////
				-->
				<!-- for a question type, these fields need to be dynamically added:
						N is number of total questions + 1

						1. top-level div id: 		"question-N",
						2. select id: 				"question-type-N"
						3. select name: 			"question-type-N"
						4. the question block id: 	"question-block-N".
						5. select class add: 		"question-block"
						6. h6: add to innerHTML     "N"
						See javascript implementation.
						These fields allow the wrapping form to identify the number
						in its sequence
				-->
				<div id="question-type-box" style="display:none">

					<div id="question-">
							<h6 class="label close-question">Question </h6><br/>
							<div class=".error-section">
								<!-- <span class="red label">Incomplete</span>-->
							</div>
							<select class="red" id="question-type-" name="question-type-">
								  <option value="0" selected></option>
								  <option value="question-response">Question-Response</option>
								  <option value="fill-in-the-blank">Fill-in-the-Blank</option>
								  <option value="multi-answer">Multiple Answer</option>
								  <option value="multiple-choice">Multiple Choice</option>
								  <option value="picture-response">Picture-Response</option>
								  <option value="multiple-choice-multiple-answer">Multi-Choice-Multi-Answer</option>
								  <option value="matching">Matching</option>
								  <option value="auto-generated">Auto-Generated</option>
								  <option value="graded-question">Graded Question</option>
							</select>
							<div id="question-block-">
							</div>
							<br/><br/><!-- Divider between questions -->
					</div>
				</div>


				<!--  Hidden Questions -->
				<div id="question-response" style="display:none;">
					<h6>Your Question</h6>
					<input type="text" name="question-" placeholder="Your Question" size="50" /><br/>
					<h6>Your Response</h6><br/>
					<input type="text" name="answer-" placeholder="Your Answer" size="50" /><br/><br/>
					<br/><input class="timed" type="checkbox" name="timed" placeholder="Allow" />Timed?<br />
				</div>

				<div id="fill-in-the-blank" style="display:none;">
					<h6>Your Question (must include a BLANK to let us know where to put blank) </h6>
					<input type="text" name="question-" placeholder="Your Question" size="50" /><br/>
					<h6>Your Response</h6><br/>
					<input type="text" name="answer-" placeholder="Your Answer" size="50" /><br/><br/>
					<br/><input class="timed" type="checkbox" name="timed" placeholder="Allow" />Timed?<br />
				</div>

				<div id="multi-answer" style="display:none;">
					<h6>Your Question(s)</h6>
					<input type="text" name="question-" placeholder="Your Question" size="50" /><br/>
					<h6>Your Response(s)</h6><br/>
					<h6 class="add-input-text"><a>[+] Add a Response</a></h6>
					<input type="text" name="answer-" placeholder="Your Answer" size="50" /><br/><br/>
					<input type="checkbox" name="ordered-" />Answers must be in order?<br/>
					<br/><input class="timed" type="checkbox" name="timed" placeholder="Allow" />Timed?<br />
				</div>

				<div id="multiple-choice" style="display:none;">
					<h6>Your Question</h6>
					<input type="text" name="question-" placeholder="Your Question" size="50" /><br/>
					<br/><h6>Your Response:<br/><b><font color="red">The first response must be the correct one.</font></b></h6>
					<h6 class="add-input-text"><a>[+] Add a Response</a></h6>
					<input type="text" name="answer-" placeholder="Your Answer" size="50" /><br/><br/>
					<br/><input class="timed" type="checkbox" name="timed" placeholder="Allow" />Timed?<br />
				</div>

				<div id="multiple-choice-multiple-answer" style="display:none;">
					<h6>Your Question</h6>
					<input type="text" name="question-" placeholder="Your Question" size="50" /><br/>
					<br/><h6><b><font color="red">Your Correct Responses</font></b></h6>
					<h6 class="add-input-text"><a>[+] Add a Response</a></h6>
					<input type="text" name="answer-" placeholder="Your Answer" size="50" /><br/><br/>
					<br/><h6><b><font color="red">Your Incorrect Responses</font></b></h6>
					<h6 class="nadd-input-text"><a>[+] Add a Response</a></h6>
					<input type="text" name="nanswer-" placeholder="Your Answer" size="50" /><br/><br/>
					<br/><input class="timed" type="checkbox" name="timed" placeholder="Allow" />Timed?<br />
				</div>

				<div id="picture-response" style="display:none;">
					<h6>Image URL</h6>
					<input type="text" name="image-" placeholder="Your Question" size="50" /><br/>
					<h6>Your Question</h6>
					<input type="text" name="question-" placeholder="Your Question" size="50" /><br/>
					<h6>Your Response</h6><br/>
					<input type="text" name="answer-" placeholder="Your Answer" size="50" /><br/><br/>
					<br/><input class="timed" type="checkbox" name="timed" placeholder="Allow" />Timed?<br />
				</div>

				<div id="matching" style="display:none;">
					<h6 class="add-match-text"><a>[+] Add Matching Pair</a></h6>
					<br/>Elem
					<input type="text" name="question-" placeholder="Your Question" size="25" />
					Matching Elem
					<input type="text" name="answer-" placeholder="Your Answer" size="25" /><br/>
					<br/><input class="timed" type="checkbox" name="timed" placeholder="Allow" />Timed?<br />
				</div>

				<div id="graded-questions" style="display:none;">
					<h6>Ask your open-ended question here</h6>
					<input type="text" name="question-" placeholder="Your Question" size="25" /><br/>
				</div>

				<!--
				///////////////////////////////
				Time limit textbox; when a user
				checks the "Timed?" option for
				any question, this is what
				gets appended.
				//////////////////////////////
				 -->
				<div id="time-limit" style="display:none;">
					<input type="text" name="time" placeholder="10" size="5" />
				</div>
		</div>

		</div><!--  row -->
	</div>
	<!-- container -->
</center>
