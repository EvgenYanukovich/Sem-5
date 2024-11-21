import React from "react";

interface ButtonProps {
    title: string;
    callback: () => void;
    disabled?: boolean;
}

const Button: React.FC<ButtonProps> = ({ title, callback, disabled = false }) => {
    return (
        <button onClick={callback} disabled={disabled}>
            {title}
        </button>
    );
};

export default Button;
