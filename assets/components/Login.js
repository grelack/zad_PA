// ./assets/js/components/Home.js
    
import React, {Component} from 'react';
import ReactDOM from 'react-dom';
// import {Route, Switch,Redirect, Link, withRouter} from 'react-router-dom';

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
                <form method='GET' action='/home'>

                    <label htmlFor='submit'></label>

                    <input type="submit" value="Zaloguj się!" ></input>

                </form>
            </div>
        )
    }
}

export default Home;