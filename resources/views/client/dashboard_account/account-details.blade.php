@extends('client.my-account')
@section('dashboard_content')

<div class="tab-pane fade active" id="account-details">
    <h3>Account details </h3>
    <div class="login">
        <div class="login_form_container">
            <div class="account_login_form">
                <form action="#">
                    <p>Already have an account? <a href="#">Log in instead!</a></p>
                    <div class="input-radio">
                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                    </div> <br>
                    <label>First Name</label>
                    <input type="text" name="first-name">
                    <label>Last Name</label>
                    <input type="text" name="last-name">
                    <label>Email</label>
                    <input type="text" name="email-name">
                    <label>Password</label>
                    <input type="password" name="user-password">
                    <label>Birthdate</label>
                    <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                    <span class="example">
                      (E.g.: 05/31/1970)
                    </span>
                    <br>
                    <span class="custom_checkbox">
                        <input type="checkbox" value="1" name="optin">
                        <label>Receive offers from our partners</label>
                    </span>
                    <br>
                    <span class="custom_checkbox">
                        <input type="checkbox" value="1" name="newsletter">
                        <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                    </span>
                    <div class="save_button primary_btn default_button">
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection