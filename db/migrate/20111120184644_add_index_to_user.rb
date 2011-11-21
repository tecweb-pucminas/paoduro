class AddIndexToUser < ActiveRecord::Migration
  def change
    add_column :users, :municipio_id, :integer
    add_index  :users, :municipio_id
  end
end
