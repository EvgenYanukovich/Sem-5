//ProductItem
import React from "react";
import { Product } from "../state/state";

type ProductItemProps = {
  product: Product;
};

const ProductItem: React.FC<ProductItemProps> = ({ product }) => {
  return (
    <div>
      <h4>{product.name}</h4>
      <p>Price: ${product.price}</p>
    </div>
  );
};

export default ProductItem;
