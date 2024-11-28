import { NavLink } from "react-router-dom";
import "../assets/styles/Header.css";

const Header = () => {
    return (
        <header className="header">
            <nav>
                <ul>
                    <li><NavLink to="/movies">Movies</NavLink></li>
                    <li><NavLink to="/cartoons">Cartoons</NavLink></li>
                    <li><NavLink to="/series">Series</NavLink></li>
                </ul>
            </nav>
        </header>
    );
};

export default Header;
