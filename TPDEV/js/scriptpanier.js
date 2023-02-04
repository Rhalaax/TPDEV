import React, { useState } from "react";

function ProductCard({ name, price, id, image, category, description, installation_options, delivery_time }) {
  const [quantity, setQuantity] = useState(1);
  const [cart, setCart] = useState([]);

  const handleSubmit = (event) => {
    event.preventDefault();
    setCart([...cart, { id, name, price, quantity }]);
  };

  return (
    <div className="product-card">
      <div className="product-image">
        <img src={image} width="100" height="100" />
      </div>
      <div className="product-info">
        <h2>{name}</h2>
        <p><b>Catégorie:</b> {category}</p>
        <p><b>Prix:</b> {price}</p>
        <p><b>Description:</b> {description}</p>
        <p><b>Options d'installation:</b> {installation_options}</p>
        <p><b>Temps de livraison:</b> {delivery_time}</p>
      </div>
      <div className="product-actions">
        <form onSubmit={handleSubmit}>
          <input type="hidden" name="id" value={id} />
          <input type="hidden" name="name" value={name} />
          <input type="hidden" name="price" value={price} />
          <input type="hidden" name="quantity" value={quantity} />
          <button type="submit">Achat</button>
        </form>
      </div>
    </div>
  );
}

function ProductList({ products }) {
  const [cart, setCart] = useState([]);

  return (
    <section className="products">
      {products.map((product) => (
        <ProductCard
          key={product.id}
          id={product.id}
          name={product.name}
          price={product.price}
          image={product.image}
          category={product.category}
          description={product.description}
          installation_options={product.installation_options}
          delivery_time={product.delivery_time}
          setCart={setCart}
        />
      ))}
    </section>
  );
}

export default ProductList;
  
 