import React, { useState } from "react";
import Button from "./Button";
import styles from "./Clicker.module.css";

const Counter: React.FC = () => {
    const [count, setCount] = useState<number>(0);

    const increase = (): void => setCount((prevCount) => prevCount + 1);
    const reset = (): void => setCount(0);

    return (
        <div className={styles.container}>
            <h1>{count}</h1>
            <Button 
                title="inc" 
                callback={increase} 
                disabled={count >= 5} 
            />
            <Button 
                title="reset" 
                callback={reset} 
                disabled={count === 0} 
            />
        </div>
    );
};

export default Counter;
