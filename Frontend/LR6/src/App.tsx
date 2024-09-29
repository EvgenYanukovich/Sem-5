import React from 'react';
import Clock from './Clock';
import Clock2 from './Clock2';
import './App.css';

const App: React.FC = () => {
  return (
    <div>
      <h1>Часы</h1>
      <Clock />
      <Clock2 />
    </div>
  );
};

export default App;
