class RemoveRoleFromCompra < ActiveRecord::Migration
  def up
    remove_column :compras, :data_compra
  end

  def down
    add_column :compras, :data_compra, :datetime
  end
end
