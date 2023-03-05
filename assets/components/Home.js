// ./assets/js/components/Home.js
    
import React, {Component} from 'react';
import ReactDOM from 'react-dom';
// import HomeController from './controllers/HomeController';
// import {Route, Switch,Redirect, Link, withRouter} from 'react-router-dom';

class Home extends React.Component 
{
    
    constructor(props) {
        super(props);
        this.state = {

        };
    }

    handleFormLogin(event){
        // console.log(event)
        const btn = document.querySelector("#btn_login_popup--js");
        const popup = document.querySelector("#form")
        const hero  = document.querySelector(".hero")
        console.log(hero)
        popup.classList.toggle("hidden");
        popup.classList.toggle("show__form");
        hero.classList.remove("hidden");
    }

    handleHero(){
        const hero  = document.querySelector(".hero")
        const popup = document.querySelector("#form")
        console.log(hero)
        hero.classList.toggle("hidden")
        popup.classList.toggle("hidden");
        popup.classList.toggle("show__form");
    }

    render() {
        return (
            <section className='section__login'>
                <div className='login'>
                    <div className='login__box'>
                        <button id="btn_login_popup--js" onClick={this.handleFormLogin}>Zaloguj się</button>
                    </div>
                </div>
                <div id="form" className='form hidden'>
                    <form method='POST' action='/login'> 
                        <label htmlFor="login">Login:
                        </label>
                        <input type='text' name='login' id='login'>
                        </input>

                        <label htmlFor="password">Password:
                        </label>
                        <input type='password' name='password' id='password'>
                        </input>
                        <input type='submit' name='submit' id='submit' value="ZALOGUJ SIE">
                        </input>
                    </form>
                </div>
                <div className='hero hidden' onClick={this.handleHero}>

                </div>
            </section>

        )
    }
}

export default Home;