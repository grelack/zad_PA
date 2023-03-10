/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
// import './bootstrap';

// homer page to login/sing up
import React from 'react';
import ReactDOM from 'react-dom';
// import { BrowserRouter as Router } from 'react-router-dom';
import Home from './components/Home';
import Message from './components/Message';
import './styles/app.css';

// console.log(document.getElementById('root'))

ReactDOM.render(<Home />, document.getElementById('root'));

ReactDOM.render(<Message />, document.getElementById('message'));