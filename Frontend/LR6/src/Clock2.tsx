import React, { useEffect, useState } from 'react';
import './Clock.css';

const Clock2: React.FC = () => {
  const [time, setTime] = useState<Date>(new Date());

  useEffect(() => {
    const intervalId = setInterval(() => {
      setTime(new Date());
    }, 1000);

    return () => clearInterval(intervalId);
  }, []);

  const seconds = time.getSeconds();
  const minutes = time.getMinutes();
  const hours = time.getHours();

  const secondDegrees = (seconds / 60) * 360;
  const minuteDegrees = (minutes / 60) * 360 + (seconds / 60) * 6; 
  const hourDegrees = ((hours % 12) / 12) * 360 + (minutes / 60) * 30; 

  return (
    <div className="clock">
      <div className="clock-face">
        <div
          className="hand hour-hand"
          style={{ transform: `rotate(${hourDegrees}deg)` }}
        ></div>
        <div
          className="hand minute-hand"
          style={{ transform: `rotate(${minuteDegrees}deg)` }}
        ></div>
        <div
          className="hand second-hand"
          style={{ transform: `rotate(${secondDegrees}deg)` }}
        ></div>
      </div>
    </div>
  );
};

export default Clock2;
