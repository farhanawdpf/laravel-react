import React, {Component} from 'react';
import {Link} from 'react-router-dom';

export default class Navbar extends Component {

    render() {
        return (
            <nav className="navbar navbar-expand-lg navbar-light bg-light">

                <div className="container">
                    <Link to="/" className="navbar-brand">ExcerTracker</Link>
                    <button className="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon"></span>
                    </button>

                    <div className="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul className="navbar-nav ml-auto">
                            <li className="nav-item">
                                <Link to="/" className="nav-link">Exercises</Link>
                            </li>
                            <li className="nav-item">
                                <Link to="/create" className="nav-link">Create Exercise Log</Link>
                            </li>
                            <li className="nav-item">
                                <Link to="/user" className="nav-link">Create User</Link>
                            </li>
                        </ul>

                    </div>
                </div>

            </nav>
        );
    }
}