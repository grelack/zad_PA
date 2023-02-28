// ./assets/js/components/Home.js
    
import React, {Component} from 'react';
import ReactDOM from 'react-dom';
// import Items from './Components/Items';
import {Route, Switch,Redirect, Link, withRouter} from 'react-router-dom';
import { Controller } from "@hotwired/stimulus";

class Home extends React.Component 
{
    
    constructor(props) {
        super(props);
        this.state = {

        };
    }

    render() {
        return (
            <div className='form'>
                <form>

                    <label htmlFor='submit'>Zaloguj się!</label>

                    <input type="submit" value="submit"></input>

                </form>
            </div>
        )
    }
}

export default Home;