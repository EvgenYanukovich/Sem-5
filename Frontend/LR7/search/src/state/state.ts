export type Product = {
    id: number;
    name: string;
    price: number;
};

const PRODUCTS: Product[] = [
    { id: 1, name: "Laptop", price: 1000 },
    { id: 2, name: "Smartphone", price: 500 },
    { id: 3, name: "Headphones", price: 100 },
    { id: 4, name: "Keyboard", price: 50 },
    { id: 5, name: "Mouse", price: 25 }
];

export default PRODUCTS;
