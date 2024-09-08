//Реализация на типах

// Задание 1
type Abc = {
    afc: number;
}

type Shoe = {
    номер: number;
    размер: number;
    цвет: string;
    цена: number;
};

type BCA = Abc | Shoe;

let obj: BCA = {
    номер: 1,
    размер: 41,
    цвет: "черный",
    цена: 1000,
    afc: 12,
}

type Category = {
    [key: string]: Shoe[];
};

type ProductCatalog = {
    Обувь: Category;
};

const products: ProductCatalog = {
    Обувь: {
        Ботинки: [
            {
                номер: 1,
                размер: 41,
                цвет: "черный",
                цена: 1000
            },
            {
                номер: 2,
                размер: 40,
                цвет: "коричневый",
                цена: 1200
            }
        ],
        Кроссовки: [
            {
                номер: 3,
                размер: 39,
                цвет: "синий",
                цена: 800
            },
            {
                номер: 4,
                размер: 41,
                цвет: "черный",
                цена: 900
            }
        ],
        Сандали: [
            {
                номер: 5,
                размер: 38,
                цвет: "коричневый",
                цена: 600
            },
            {
                номер: 6,
                размер: 37,
                цвет: "белый",
                цена: 700
            }
        ]
    }
};

console.log(products['Обувь']['Ботинки'][0]);

// Задание 2
function Filter(minPrice: number, maxPrice: number, color: string, size: number): number[] {
    const arrObjects = Object.keys(products['Обувь']).flatMap(key => products['Обувь'][key]);

    return arrObjects
        .filter(shoe => shoe.цена >= minPrice && shoe.цена <= maxPrice && shoe.размер === size && shoe.цвет === color)
        .map(shoe => shoe.номер);
}

console.log(Filter(800, 1200, 'черный', 41));

//Задания 3-4
type DiscountedShoe = {
    номер: number;
    размер: number;
    цвет: string;
    скидка: number;
    стоимость: number;
    цена?: number;
};

type DiscountedCategory = {
    [key: string]: DiscountedShoe[];
};

type DiscountedProductCatalog = {
    Обувь: DiscountedCategory;
};

const newProducts: DiscountedProductCatalog = {
    Обувь: {
        Ботинки: [
            {
                номер: 1,
                размер: 42,
                цвет: "черный",
                скидка: 0.1,
                стоимость: 900
            },
            {
                номер: 2,
                размер: 40,
                цвет: "коричневый",
                скидка: 0.2,
                стоимость: 960
            }
        ],
        Кроссовки: [
            {
                номер: 3,
                размер: 39,
                цвет: "синий",
                скидка: 0.15,
                стоимость: 680
            },
            {
                номер: 4,
                размер: 41,
                цвет: "черный",
                скидка: 0.1,
                стоимость: 810
            }
        ],
        Сандалии: [
            {
                номер: 5,
                размер: 38,
                цвет: "коричневый",
                скидка: 0.2,
                стоимость: 480
            },
            {
                номер: 6,
                размер: 37,
                цвет: "белый",
                скидка: 0.1,
                стоимость: 630
            }
        ]
    }
};

for (const category in newProducts['Обувь']) {
    for (const shoe of newProducts['Обувь'][category]) {
        Object.defineProperties(shoe, {
            'цена': {
                get() {
                    return this['стоимость'] * (1 - this['скидка']);
                },
                configurable: false
            },
            'номер': {
                writable: false,
                enumerable: true,
                configurable: false
            }
        });
    }
}

console.log(newProducts['Обувь']['Ботинки'][0]['цена']);

// Задание 5-6
function Shoe(this: any, number: number, size: number, color: string, discount: number, cost: number) {
    this['номер'] = number;
    this['размер'] = size;
    this['цвет'] = color;
    this['скидка'] = discount;
    this['стоимость'] = cost;

    Object.defineProperties(this, {
        'цена': {
            get() {
                return this['стоимость'] * (1 - this['скидка']);
            },
            configurable: false
        },
        'номер': {
            writable: false,
            enumerable: true,
            configurable: false
        }
    });
}

type AllProductsCatalog = {
    Обувь: DiscountedCategory;
};

const allProducts: AllProductsCatalog = {
    Обувь: {
        Ботинки: [
            new (Shoe as any)(1, 42, "черный", 0.1, 900),
            new (Shoe as any)(2, 40, "коричневый", 0.2, 960)
        ],
        Кроссовки: [
            new (Shoe as any)(3, 39, "синий", 0.15, 680),
            new (Shoe as any)(4, 41, "черный", 0.1, 810)
        ],
        Сандалии: [
            new (Shoe as any)(5, 38, "коричневый", 0.2, 480),
            new (Shoe as any)(6, 37, "белый", 0.1, 630)
        ]
    }
};

console.log(allProducts);

interface A {
    a: number;
}

interface B {
    b: number;
}

//Реализация на интерфейсах
////Задание 1
//interface Product {
//    номер: number;
//    размер: number;
//    цвет: string;
//    цена: number;
//}
//
//interface Category {
//    [key: string]: Product[];
//}
//
//interface Products {
//    Обувь: Category;
//}
//
//let products: Products = {
//    "Обувь": {
//        "Ботинки": [
//            {
//                "номер": 1,
//                "размер": 41,
//                "цвет": "черный",
//                "цена": 1000
//            },
//            {
//                "номер": 2,
//                "размер": 40,
//                "цвет": "коричневый",
//                "цена": 1200
//            }
//        ],
//        "Кроссовки": [
//            {
//                "номер": 3,
//                "размер": 39,
//                "цвет": "синий",
//                "цена": 800
//            },
//            {
//                "номер": 4,
//                "размер": 41,
//                "цвет": "черный",
//                "цена": 900
//            }
//        ],
//        "Сандали": [
//            {
//                "номер": 5,
//                "размер": 38,
//                "цвет": "коричневый",
//                "цена": 600
//            },
//            {
//                "номер": 6,
//                "размер": 37,
//                "цвет": "белый",
//                "цена": 700
//            }
//        ]
//    }
//};
//
//console.log(products['Обувь']['Ботинки'][0]);
//
////Задание 2
//function Filter(minPrice: number, maxPrice: number, color: string, size: number): number[] {
//    let arrObjects: Product[] = Object.keys(products['Обувь']).flatMap(key => products['Обувь'][key]);
//
//    return arrObjects.filter(product =>
//        product['цена'] >= minPrice &&
//        product['цена'] <= maxPrice &&
//        product['размер'] === size &&
//        product['цвет'] === color
//    ).map(product => product['номер']);
//}
//
//console.log(Filter(800, 1200, 'черный', 41));
//
////Задание 3-4
//interface DiscountedProduct {
//    номер: number;
//    размер: number;
//    цвет: string;
//    цена?: number;
//    скидка: number;
//    стоимость: number;
//}
//
//interface NewCategory {
//    [key: string]: DiscountedProduct[];
//}
//
//interface NewProducts {
//    Обувь: NewCategory;
//}
//
//let newProducts: NewProducts = {
//    "Обувь": {
//        "Ботинки": [
//            {
//                "номер": 1,
//                "размер": 42,
//                "цвет": "черный",
//                "скидка": 0.1,
//                "стоимость": 900
//            },
//            {
//                "номер": 2,
//                "размер": 40,
//                "цвет": "коричневый",
//                "скидка": 0.2,
//                "стоимость": 960
//            }
//        ],
//        "Кроссовки": [
//            {
//                "номер": 3,
//                "размер": 39,
//                "цвет": "синий",
//                "скидка": 0.15,
//                "стоимость": 680
//            },
//            {
//                "номер": 4,
//                "размер": 41,
//                "цвет": "черный",
//                "скидка": 0.1,
//                "стоимость": 810
//            }
//        ],
//        "Сандалии": [
//            {
//                "номер": 5,
//                "размер": 38,
//                "цвет": "коричневый",
//                "скидка": 0.2,
//                "стоимость": 480
//            },
//            {
//                "номер": 6,
//                "размер": 37,
//                "цвет": "белый",
//                "скидка": 0.1,
//                "стоимость": 630
//            }
//        ]
//    }
//};
//
//for (let category in newProducts['Обувь']) {
//    for (let shoe of newProducts['Обувь'][category]) {
//        Object.defineProperties(shoe, {
//            'цена': {
//                get() {
//                    return this['стоимость'] * (1 - this['скидка']);
//                },
//                configurable: false
//            },
//            'номер': {
//                writable: false,
//                enumerable: true,
//                configurable: false
//            }
//        });
//    }
//}
//
//console.log(newProducts['Обувь']['Ботинки'][0]['цена']);
//
////Задание 5-6
//interface LastProduct {
//    номер: number;
//    размер: number;
//    цвет: string;
//    скидка: number;
//    стоимость: number;
//    readonly цена: number;
//}
//
//interface LastCategory {
//    [key: string]: LastProduct[];
//}
//
//interface AllProducts {
//    Обувь: LastCategory;
//}
//
//class Shoe implements LastProduct {
//    номер: number;
//    размер: number;
//    цвет: string;
//    скидка: number;
//    стоимость: number;
//
//    constructor(number: number, size: number, color: string, discount: number, cost: number) {
//        this.номер = number;
//        this.размер = size;
//        this.цвет = color;
//        this.скидка = discount;
//        this.стоимость = cost;
//    }
//
//    get цена(): number {
//        return this.стоимость * (1 - this.скидка);
//    }
//}
//
//
//let allProducts: AllProducts = {
//    "Обувь": {
//        "Ботинки": [
//            new Shoe(1, 42, "черный", 0.1, 900),
//            new Shoe(2, 40, "коричневый", 0.2, 960)
//        ],
//        "Кроссовки": [
//            new Shoe(3, 39, "синий", 0.15, 680),
//            new Shoe(4, 41, "черный", 0.1, 810)
//        ],
//        "Сандалии": [
//            new Shoe(5, 38, "коричневый", 0.2, 480),
//            new Shoe(6, 37, "белый", 0.1, 630)
//        ]
//    }
//};
//
//console.log(allProducts);
//