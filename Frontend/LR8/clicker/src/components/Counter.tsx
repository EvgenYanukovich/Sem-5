import React, { useState } from "react";
import Button from "./Button";
import styles from "./Counter.module.css";

const Counter: React.FC = () => {
    const [count, setCount] = useState<number>(0);

    return (
        <div className={styles.container}>
            <h1 style={{ color: count === 5 ? "red" : "#87CEFA" }}>{count}</h1>
            <Button 
                title="inc" 
                callback={() => setCount((prevCount) => prevCount + 1)} 
                disabled={count >= 5} 
            />
            <Button 
                title="reset" 
                callback={() => setCount(0)} 
                disabled={count === 0} 
            />
        </div>
    );
};

export default Counter;