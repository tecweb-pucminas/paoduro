class CreateCompras < ActiveRecord::Migration
  def change
    create_table :compras do |t|
      t.references :produto
      t.references :user
      t.datetime :data_compra
      t.boolean :status

      t.timestamps
    end
    add_index :compras, :produto_id
    add_index :compras, :user_id
  end
end
