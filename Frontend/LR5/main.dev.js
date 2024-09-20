"use strict";

// 1. Создание промиса myPromise, который через 3 секунды генерирует случайное число
var myPromise = new Promise(function (resolve, reject) {
  setTimeout(function () {
    var randomNumber = Math.random();
    resolve(randomNumber);
  }, 3000);
});
myPromise.then(function (number) {
  console.log("\u0421\u0433\u0435\u043D\u0435\u0440\u0438\u0440\u043E\u0432\u0430\u043D\u043D\u043E\u0435 \u0447\u0438\u0441\u043B\u043E (\u0447\u0435\u0440\u0435\u0437 3 \u0441\u0435\u043A\u0443\u043D\u0434\u044B): ".concat(number));
}); // 2. Функция, принимающая параметр delay и возвращающая промис

function createPromise(delay) {
  return new Promise(function (resolve, reject) {
    setTimeout(function () {
      var randomNumber = Math.random();
      resolve(randomNumber);
    }, delay);
  });
}

Promise.all([createPromise(1000), createPromise(2000), createPromise(3000)]).then(function (numbers) {
  console.log("\u0412\u0441\u0435 \u043F\u0440\u043E\u043C\u0438\u0441\u044B \u0432\u044B\u043F\u043E\u043B\u043D\u0435\u043D\u044B, \u0441\u0433\u0435\u043D\u0435\u0440\u0438\u0440\u043E\u0432\u0430\u043D\u043D\u044B\u0435 \u0447\u0438\u0441\u043B\u0430: ".concat(numbers));
}); // 3. Вывод в консоль и почему

var pr = new Promise(function (res, rej) {
  rej('ku');
});
pr.then(function () {
  return console.log(1);
})["catch"](function () {
  return console.log(2);
})["catch"](function () {
  return console.log(3);
}).then(function () {
  return console.log(4);
}).then(function () {
  return console.log(5);
}); // 4. Промис с результатом 21 и цепочка then

var promise = new Promise(function (resolve, reject) {
  resolve(21);
});
promise.then(function (result) {
  console.log(result);
  return result * 2;
}).then(function (newResult) {
  console.log(newResult);
}); // 5. Реализация предыдущей задачи с использованием async/await

function processNumbers() {
  var result, newResult;
  return regeneratorRuntime.async(function processNumbers$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          _context.next = 2;
          return regeneratorRuntime.awrap(Promise.resolve(21));

        case 2:
          result = _context.sent;
          console.log(result);
          newResult = result * 2;
          console.log(newResult);

        case 6:
        case "end":
          return _context.stop();
      }
    }
  });
}

processNumbers();