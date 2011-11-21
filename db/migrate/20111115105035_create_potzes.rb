class CreatePotzes < ActiveRecord::Migration
  def change
    create_table :potzes do |t|
      t.string :cupom
      t.references :user

      t.timestamps
    end
    add_index :potzes, :user_id
  end
end
