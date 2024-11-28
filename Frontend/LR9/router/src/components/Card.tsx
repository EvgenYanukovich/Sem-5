import React from "react";
import "../assets/styles/Card.css"; 

export interface CardProps {
    image: string;    
    title: string;    
    year: number;     
    category: string; 
  }
  

const Card: React.FC<CardProps> = ({ image, title, year, category }) => {
  return (
    <div className="card">
      <img className="card-image" src={image} alt={title} />
      <div className="card-content">
        <h3 className="card-title">{title}</h3>
        <p className="card-year">{year}</p>
        <p className="card-category">{category}</p>
      </div>
    </div>
  );
};

export default Card;
