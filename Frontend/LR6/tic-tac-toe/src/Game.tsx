import React, { useState } from 'react';
import Board from './Board';

interface GameState {
  squares: Array<string | null>;
}

const Game: React.FC = () => {
  const [history, setHistory] = useState<GameState[]>([{ squares: Array(9).fill(null) }]);
  const [stepNumber, setStepNumber] = useState(0);
  const [isXNext, setIsXNext] = useState(true);

  const current = history[stepNumber];
  const winner = calculateWinner(current.squares);

  const handleClick = (index: number) => {
    const gameHistory = history.slice(0, stepNumber + 1);
    const currentSquares = gameHistory[gameHistory.length - 1].squares.slice();

    if (currentSquares[index] || winner) return;

    currentSquares[index] = isXNext ? 'X' : 'O';
    setHistory(gameHistory.concat([{ squares: currentSquares }]));
    setStepNumber(gameHistory.length);
    setIsXNext(!isXNext);
  };

  const jumpTo = (step: number) => {
    setStepNumber(step);
    setIsXNext(step % 2 === 0);
  };

  const resetGame = () => {
    setHistory([{ squares: Array(9).fill(null) }]);
    setStepNumber(0);
    setIsXNext(true);
  };

  const moves = history.slice(1).map((_step, move) => {
    const desc = `Перейти к ходу #${move + 1}`;
    return (
      <li key={move + 1}>
        <button onClick={() => jumpTo(move + 1)}>{desc}</button>
      </li>
    );
  });

  const status = winner ? `Победитель: ${winner}` : `Следующий ход: ${isXNext ? 'X' : 'O'}`;

  return (
    <div className="game">
      <div className="game-board">
        <Board squares={current.squares} onClick={handleClick} />
      </div>
      <div className="game-info">
        <div>{status}</div>
        <button onClick={resetGame}>Перезапустить игру</button>
        <ol>{moves}</ol>
      </div>
    </div>
  );
};

function calculateWinner(squares: Array<string | null>): string | null {
  const lines = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6],
  ];

  for (const [a, b, c] of lines) {
    if (squares[a] && squares[a] === squares[b] && squares[a] === squares[c]) {
      return squares[a];
    }
  }
  return null;
}

export default Game;
