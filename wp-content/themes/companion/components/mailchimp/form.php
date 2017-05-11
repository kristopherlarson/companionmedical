<div id="newsletter-signup">

    <p class="callout" id="response"></p>


    <form id="signup" novalidate data-abide class="newsletter-form formee" action="subscribe.php" method="post">

        <div class="mailing-list">

            <label for="fname" class="visual-hide">First Name</label>
            <input name="fname" id="fname" type="text" pattern="alpha" placeholder="First Name" required/>
            <span class="form-error">
                Please enter a valid first name.
            </span>

            <label for="lname" class="visual-hide">Last Name</label>
            <input name="lname" id="lname" type="text" pattern="alpha" placeholder="Last Name" required/>
            <span class="form-error">
                Please enter a valid last name.
            </span>

            <label for="email" class="visual-hide">Email</label>
            <input name="email" id="email" type="email" pattern="email" placeholder="Email" required/>
            <span class="form-error">
                Please enter a valid email.
            </span>


        </div>

            <div class="button-wrap">
                <button id="newsletter-submit" class="button form-submit" type="submit">Submit</button>
            </div>

	</form>
</div>
