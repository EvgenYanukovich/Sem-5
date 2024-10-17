import React, { useEffect, useState } from 'react';
import './Clock.css';

const Clock: React.FC = () => {
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

  const ticks = Array.from({ length: 60 }, (_, i) => i);

  return (
    <div className="clock">
      <div className="clock-face">
        {/* Генерация черточек */}
        <div className="ticks-container">
          {ticks.map((tick, i) => (
            <div
              key={i}
              className={`tick`} 
              style={{ transform: `rotate(${i * 6}deg) translateY(-120px)` }} 
            />
          ))}
        </div>
        <div className="ticks-container">
          {ticks.map((tick2, i) => (
            <div
              key={i}
              className={`tick2`} 
              style={{ transform: `rotate(${i * 30}deg) translateY(-120px)` }}
            />
          ))}
        </div>

        {/* Часовая стрелка */}
        <div
          className="hand hour-hand"
          style={{ transform: `rotate(${hourDegrees}deg)` }}
        ></div>

        {/* Минутная стрелка */}
        <div
          className="hand minute-hand"
          style={{ transform: `rotate(${minuteDegrees}deg)` }}
        ></div>

        {/* Секундная стрелка */}
        <div
          className={`hand second-hand ${seconds === 0 ? 'no-transition' : ''}`}
          style={{ transform: `rotate(${secondDegrees}deg)` }}
        ></div>
      </div>
    </div>
  );
};

export default Clock;
