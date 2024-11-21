//ProductList
import React from "react";
import { Product } from "../state/state";
import ProductItem from "./ProductItem";

type ProductListProps = {
    products: Product[];
};

const ProductList: React.FC<ProductListProps> = ({ products }) => {
    return (
        <div>
            {products.map((product) => (
                <ProductItem key={product.id} product={product} />
            ))}
        </div>
    );
};

export default ProductList;
